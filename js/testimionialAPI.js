const url = "https://jsonplaceholder.typicode.com/posts";

fetch(url)
  .then((res) => {
    return res.json();
  })
  .then((data) => {
    console.log(data);
    let list = data.map(
      (data) =>
        "<div class='testimonialCard'>" +
        "<img src='https://source.unsplash.com/random/100x100'>" +
        "<div class='container'>" +
        "<h2 class='custName'>" +
        data.title +
        "</h2>" +
        "<p class='custReview'>" +
        data.body +
        "</p>" +
        "</div>" +
        "</div>"
    );
    document.querySelector("#testimonialWrapper").innerHTML = list
    .slice(30, 35)
    .join("");
  });