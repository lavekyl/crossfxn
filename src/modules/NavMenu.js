class NavMenu {
  constructor() {
    this.navMenu = document.querySelector('.nav-menu')
    this.navMenuButton = document.querySelector('[aria-controls="navbar-dropdown"]')
    this.navMenuDropdown = document.querySelector('#navbar-dropdown')
    this.events()
  }

  events() {
    this.navMenuButton.addEventListener('click', () => this.toggleNavMenu())
  }

  toggleNavMenu() {
    this.navMenuButton.classList.toggle('dashicons-menu')
    this.navMenuButton.classList.toggle('dashicons-no-alt')
    this.navMenuDropdown.classList.toggle('hidden')
    this.navMenuButton.setAttribute('aria-expanded', this.navMenuButton.getAttribute('aria-expanded') === 'false' ? 'true' : 'false')
  }
}

export default NavMenu