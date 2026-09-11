// Entry point for Vite: mobile nav, scroll-reveal animations, and modals.
document.addEventListener("DOMContentLoaded", () => {
  /* ---------- Mobile nav toggle ---------- */
  const toggle = document.getElementById("nav-toggle");
  const menu = document.getElementById("mobile-menu");
  if (toggle && menu) {
    toggle.addEventListener("click", () => {
      menu.classList.toggle("hidden");
    });
  }

  /* ---------- Scroll-reveal animations ---------- */
  const revealEls = document.querySelectorAll(".reveal, .reveal-stagger");
  if ("IntersectionObserver" in window && revealEls.length) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("is-visible");
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.15, rootMargin: "0px 0px -40px 0px" }
    );
    revealEls.forEach((el) => observer.observe(el));
  } else {
    revealEls.forEach((el) => el.classList.add("is-visible"));
  }

  /* ---------- Modals (Menu + Order/Contact) ---------- */
  const openModal = (id) => {
    const modal = document.getElementById(id);
    if (!modal) return;
    modal.classList.remove("hidden");
    modal.classList.add("flex");
    document.body.classList.add("modal-open");
    // Trigger the fade/scale-in animation on the next frame.
    requestAnimationFrame(() => modal.classList.add("modal-active"));
    const firstFocusable = modal.querySelector("button, a, input, textarea");
    if (firstFocusable) firstFocusable.focus();
  };

  const closeModal = (modal) => {
    if (!modal) return;
    modal.classList.remove("modal-active");
    document.body.classList.remove("modal-open");
    // Wait for the fade/scale-out transition before hiding.
    setTimeout(() => {
      modal.classList.add("hidden");
      modal.classList.remove("flex");
    }, 200);
  };

  // Open triggers
  document.querySelectorAll("[data-open-modal]").forEach((trigger) => {
    trigger.addEventListener("click", (e) => {
      e.preventDefault();
      const modalId = trigger.getAttribute("data-open-modal");
      openModal(modalId);

      // If this trigger carries order context (plan/price), populate the order modal.
      const plan = trigger.getAttribute("data-plan");
      const price = trigger.getAttribute("data-price");
      const context = trigger.getAttribute("data-context");

      const planField = document.getElementById("order-selected-plan");
      const subtitle = document.getElementById("order-modal-subtitle");

      if (modalId === "order-modal" && planField) {
        // planField is now a <select>; match the trigger's plan/context to an
        // existing option (by prefix for plans, by exact value for context),
        // falling back to adding a one-off option if nothing matches.
        const options = Array.from(planField.options);
        let matchedValue = null;

        if (plan) {
          const match = options.find((o) =>
            o.text.toLowerCase().startsWith(plan.toLowerCase())
          );
          matchedValue = match ? match.value : `${plan}${price ? " (" + price + ")" : ""}`;
        } else if (context) {
          const match = options.find((o) => o.value === context);
          matchedValue = match ? match.value : context;
        } else {
          matchedValue = "General Inquiry";
        }

        if (!options.some((o) => o.value === matchedValue)) {
          const opt = document.createElement("option");
          opt.value = matchedValue;
          opt.textContent = matchedValue;
          planField.appendChild(opt);
        }
        planField.value = matchedValue;

        if (subtitle) {
          subtitle.textContent = plan
            ? `You're ordering: ${plan}${price ? " — " + price : ""}. Tell us a few details and we'll confirm by phone or Messenger.`
            : "Tell us what you'd like — we'll confirm by phone or Messenger.";
        }
      }
    });
  });

  // Close triggers (button + backdrop click + Escape)
  document.querySelectorAll("[data-close-modal]").forEach((closer) => {
    closer.addEventListener("click", () => {
      closeModal(closer.closest(".js-modal"));
    });
  });

  document.querySelectorAll(".js-modal").forEach((modal) => {
    modal.addEventListener("click", (e) => {
      if (e.target === modal) closeModal(modal);
    });
  });

  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") {
      document.querySelectorAll(".js-modal:not(.hidden)").forEach(closeModal);
    }
  });

  /* ---------- Order form: build a WhatsApp/Messenger-style message ---------- */
  const orderForm = document.getElementById("order-form");
  if (orderForm) {
    orderForm.addEventListener("submit", (e) => {
      e.preventDefault();
      const name = document.getElementById("order-name").value.trim();
      const contactNumber = document.getElementById("order-contact").value.trim();
      const plan = document.getElementById("order-selected-plan").value.trim();
      const details = document.getElementById("order-details").value.trim();

      const lines = [
        `Hi Belen's Special Palabok! I'd like to place an order.`,
        `Name: ${name || "-"}`,
        `Contact number: ${contactNumber || "-"}`,
        `Order/Plan: ${plan || "-"}`,
        details ? `Details: ${details}` : null,
      ].filter(Boolean);

      const message = encodeURIComponent(lines.join("\n"));
      const waNumber = "639274496817"; // matches footer contact number, no + or spaces
      window.open(`https://wa.me/${waNumber}?text=${message}`, "_blank");

      const confirmationEl = document.getElementById("order-form-confirmation");
      if (confirmationEl) {
        confirmationEl.classList.remove("hidden");
        setTimeout(() => confirmationEl.classList.add("hidden"), 6000);
      }
      orderForm.reset();
    });
  }
});
