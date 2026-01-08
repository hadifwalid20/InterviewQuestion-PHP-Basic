document.addEventListener("DOMContentLoaded", () => {
  const input = document.getElementById("username");
  const btn = document.getElementById("submitBtn");
  const msg = document.getElementById("msg");

  function setMessage(text, colorClass) {
    msg.classList.remove("green", "red");
    msg.classList.add(colorClass);
    msg.textContent = text;
  }

  btn.addEventListener("click", async () => {
    const username = (input.value || "").trim();

    // 1. check if input is empty
    if (username === "") {
      setMessage("Key in username and click submit", "green");
      return;
    }

    // 2. if not empty, ajax pass value to info.php
    try {
      const res = await fetch("info.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: "username=" + encodeURIComponent(username),
      });

      const data = await res.json();

      // 3. show verified if correct, else Error
      if (data.status === "verified") {
        setMessage("Verified", "green");
      } else {
        setMessage("Error", "red");
      }
    } catch (e) {
      // If something goes wrong 
      setMessage("Error", "red");
      console.error(e);
    }
  });
});
