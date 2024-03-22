const form = document.querySelector("#booking-form");

form.addEventListener("submit", function(event) {
  if (
    !form.name.value ||
    !form.email.value ||
    !form.phone.value ||
    !form.pickup.value ||
    !form.destination.value ||
    !form.date.value ||
    !form.time.value ||
    !form.num_seats.value
  )
   {
    event.preventDefault();
    alert("Please fill out all fields.");
}
});