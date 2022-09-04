var bcount = 0;

function Change(){var el = document.querySelector("#Aurico") ; while (bcount < 1){var e = document.createElement("button");e.innerHTML = "Start Personality test"; e.onclick = function(){alert("Hi")};e.style.border = "4mm ridge red"; e.style.borderRadius = "25px";e.style.fontFamily = "arial"; e.style.backgroundColor = "grey"; e.style.color = "orange";e.style.display = "flex"; e.style.justifyContent = "center"; document.body.append(e);bcount += 1;}}
