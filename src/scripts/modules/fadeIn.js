export const fadeIn = (target = '.c-fade-in') => {
  const callback = (entries, observer) => {
    entries.forEach((entry, index) => {
      if(entry.isIntersecting) {
        $(entry.target).addClass('active')
      }
    })
  }

  const options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.2
  }
  const observer = new IntersectionObserver(callback, options)
  const elements = document.querySelectorAll(target)
  elements.forEach(element => {
    observer.observe(element)
  })
}