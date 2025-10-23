// Smooth scrolling for anchor links
document.addEventListener("DOMContentLoaded", () => {
  const links = document.querySelectorAll('a[href^="#"]')

  links.forEach((link) => {
    link.addEventListener("click", function (e) {
      e.preventDefault()
      const targetId = this.getAttribute("href")
      const targetElement = document.querySelector(targetId)

      if (targetElement) {
        const headerHeight = document.querySelector(".site-header").offsetHeight
        const targetPosition = targetElement.offsetTop - headerHeight

        window.scrollTo({
          top: targetPosition,
          behavior: "smooth",
        })
      }
    })
  })

  // Header scroll effect
  const header = document.querySelector(".site-header")
  let lastScroll = 0

  window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset

    if (currentScroll > 100) {
      header.style.boxShadow = "0 4px 12px rgba(0, 0, 0, 0.15)"
    } else {
      header.style.boxShadow = "0 2px 10px rgba(0, 0, 0, 0.1)"
    }

    lastScroll = currentScroll
  })

  // Set minimum date for booking form
  const checkinInput = document.getElementById("checkin")
  const checkoutInput = document.getElementById("checkout")

  if (checkinInput && checkoutInput) {
    const today = new Date().toISOString().split("T")[0]
    checkinInput.setAttribute("min", today)

    checkinInput.addEventListener("change", function () {
      const checkinDate = new Date(this.value)
      checkinDate.setDate(checkinDate.getDate() + 1)
      const minCheckout = checkinDate.toISOString().split("T")[0]
      checkoutInput.setAttribute("min", minCheckout)
    })
  }
})
