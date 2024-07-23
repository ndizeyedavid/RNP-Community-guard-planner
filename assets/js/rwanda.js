async function loadIt(province) {
  var out = document.querySelector("#out");
  var target = document.querySelector("#target");
  if (province == "kigali" || province == "all") {
    target.innerHTML = province;
  } else {
    target.innerHTML = province + "ern";
  }

  out.innerHTML = "<div class='loading-cont'><div class='loading'></div></div>";
  console.log("fetching...");
  var url;
  if (province == "all") {
    url = "https://rwanda.p.rapidapi.com/districts";
  } else {
    url = `https://rwanda.p.rapidapi.com/districts?p=${province}`;
  }

  const options = {
    method: "GET",
    headers: {
      "x-rapidapi-key": "7f78d6debemsh3c6b3a42f493a84p11cb5ajsn5c6cbc66a950",
      "x-rapidapi-host": "rwanda.p.rapidapi.com",
    },
  };

  try {
    const response = await fetch(url, options);
    const result = await response.json();

    out.innerHTML = "";
    for (i = 0; i < result.data.length; i++) {
      var district = result.data[i];
      out.innerHTML += `
        <div class="card">
            <h3>${district}</h3>

            <table>
                <tr>
                    <td>Crimes</td>
                    <td id="distirct_crime" class="value">${analytics(
                      district,
                      this
                    )}</td>
                </tr>
                <tr>
                    <td>Surveys</td>
                    <td id="district_survey" class="value">${analytics(
                      district
                    )}</td>
                </tr>
            </table>
            <a href="view.php?d=${district.toLowerCase()}" class="btn"> View </a>
        </div>      
      `;
    }
  } catch (error) {
    console.error(error);
    out.innerHTML =
      "<p style='text-align: center; color: red;margin-top: 50px;'>An error occured. Please refresh this page!</p>";
  }
}
loadIt("all");

function analytics() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = () => {
    const res = xhttp.response;
    return res;
  };
  xhttp.open("GET", "./php/analytics.php");
  xhttp.send();
}
