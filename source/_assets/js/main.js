const getClientReferenceId = () => {
  return (
    (window.Rewardful && window.Rewardful.referral) ||
    "checkout_" + new Date().getTime()
  );
};

const redirectToStripe = async (plan) => {
  const response = await fetch("/.netlify/functions/checkout", {
    method: "POST",
    body: JSON.stringify({
      plan: plan,
      clientReferenceId: getClientReferenceId(),
    }),
  })
    .then((response) => {
      if (response.status >= 400 && response.status < 600) {
        throw new Error("Bad response from server");
      }
      return response.json();
    })
    .catch((error) => {
      window.location.href = "https://markhamsq.com";
    });

  window.location.href = response.url;
};

const stripeButtons = document.querySelectorAll(".js-stripe-button");

stripeButtons.forEach((button) => {
  button.addEventListener("click", (event) => {
    event.preventDefault();

    const plan = button.dataset.plan;

    redirectToStripe(plan);
  });
});
