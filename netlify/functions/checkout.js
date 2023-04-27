export const handler = async (event) => {
  const data = JSON.parse(event.body);

  if (data.plan === undefined || data.plan === null) {
    return {
      statusCode: 422,
      body: JSON.stringify({
        message: "Plan is required",
      }),
    };
  }

  const price = {
    "design-monthly": process.env.PRICE_DESIGN_MONTHLY,
    "design-quarterly": process.env.PRICE_DESIGN_QUARTERLY,
    "design-yearly": process.env.PRICE_DESIGN_YEARLY,
    "dev-monthly": process.env.PRICE_DEV_MONTHLY,
    "dev-quarterly": process.env.PRICE_DEV_QUARTERLY,
    "dev-yearly": process.env.PRICE_DEV_YEARLY,
    "design-dev-monthly": process.env.PRICE_DESIGN_DEV_MONTHLY,
    "design-dev-quarterly": process.env.PRICE_DESIGN_DEV_QUARTERLY,
    "design-dev-yearly": process.env.PRICE_DESIGN_DEV_YEARLY,
  }[data.plan];

  const stripe = require("stripe")(process.env.STRIPE_KEY);

  const session = await stripe.checkout.sessions.create({
    success_url: data.plan.includes("design")
      ? "https://markhamsq.com/thank-you-design"
      : "https://markhamsq.com/thank-you-development",
    cancel_url: data.plan.includes("design")
      ? "https://markhamsq.com/design-leverage/plans"
      : "https://markhamsq.com/development-leverage/plans",
    line_items: [{ price: price, quantity: 1 }],
    mode: "subscription",
    client_reference_id: data.clientReferenceId,
  });

  return {
    statusCode: 200,
    body: JSON.stringify(session),
  };
};
