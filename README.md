<div id="top"></div>

<!-- PROJECT SHIELDS -->
[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]



<!-- PROJECT LOGO -->
<br />
<div align="center">

<h3 align="center">Zip Code Distance Calculator</h3>

  <p align="center">
    Sample Laravel app that calculates distances between a list of zip codes (IEL-SE-2)
    <br />
    <a href="https://github.com/SturmB/zipcodes-distance"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://github.com/SturmB/zipcodes-distance/issues">Report Bug</a>
    ·
    <a href="https://github.com/SturmB/zipcodes-distance/issues">Request Feature</a>
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgments">Acknowledgments</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

This project is mostly just a refresher for my knowledge of Laravel. It is an assessment assigned by a potential employer with a specific set of instructions. Ultimately, it takes a list of ZIP codes entered by the user and displays the total distance between each those ZIP codes in kilometers.

<p align="right">(<a href="#top">back to top</a>)</p>



### Built With

* [Laravel 9.0](https://laravel.com)
* [Bootstrap 5.1](https://getbootstrap.com)
* [JQuery 3.6](https://jquery.com)

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- GETTING STARTED -->
## Getting Started

To get a local copy up and running follow these simple steps.

### Prerequisites

Before installing, make sure you have a full development environment installed. For Windows, I tend to prefer [Laragon][laragon]. It will make sure you have Apache, Nginx, MySQL, and PHP installed. Follow the instructions on their site to install it.

You will also need Node.js with npm installed as well as Composer. For Node.js, my favorite installer for Windows and WSL is [nvs][nvs]. Follow the instructions there to get it installed on your machine. For [Composer][composer], follow their official instructions as well.

If you already have Node.js installed, please make sure that your copy of npm is up-to-date.
* npm
  ```sh
  npm install npm@latest -g
  ```

### Installation

1. Clone the repo
   ```sh
   git clone https://github.com/SturmB/zipcodes-distance.git
   ```
2. Install NPM packages
   ```sh
   npm install
   ```
3. Make a working copy of `.env`
   ```sh
   cp .env.example .env
   ```
4. Modify the `DB_*` entries in `.env` to reflect your MySQL installation
5. Run a migration
   ```shell
   php artisan migrate
   ```
6. Visit the local web page based on your dev environment. If you're using Laragon, it is likely http://zipcodes-distance.local/, but it may also be http://localhost/ or some variation. Check the documentation.

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- USAGE EXAMPLES -->
## Usage

This app is simple enough to be fairly self-explanatory. You enter ZIP codes using the input on the left (or on the top, for smaller screens) and they will appear on the list to the right (or bottom, for smaller screens). Once two or more ZIP codes have been entered, their total distances appear above the list of ZIP codes. You can keep adding more ZIP codes for as long as you like.

To start with a fresh list of ZIP codes, press the "Start Over" button below the input area. Otherwise, the ZIP code list and distance will persist until you close that browser tab/window.

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- ROADMAP -->
## Roadmap

- [ ] Test for more possible errors
- [ ] Add screenshots to documentation
- [ ] See if ZIP code list expands as expected

See the [open issues](https://github.com/SturmB/zipcodes-distance/issues) for a full list of proposed features (and known issues).

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- LICENSE -->
## License

Distributed under the ISC License. See `LICENSE.txt` for more information.

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- CONTACT -->
## Contact

Your Name - [@SturmB](https://twitter.com/SturmB) - chris@chrismcgee.info

Project Link: [https://github.com/SturmB/zipcodes-distance](https://github.com/SturmB/zipcodes-distance)

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- ACKNOWLEDGMENTS -->
## Acknowledgments

* [Othneil Drew](https://github.com/othneildrew) for the excellent README template
* [Licenses](https://github.com/licenses) for the excellent LICENSE template
* [This SO Answer](https://stackoverflow.com/a/14751773/2379279) for an excellent implementation of the Haversine formula in PHP

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/SturmB/zipcodes-distance.svg?style=for-the-badge
[contributors-url]: https://github.com/SturmB/zipcodes-distance/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/SturmB/zipcodes-distance.svg?style=for-the-badge
[forks-url]: https://github.com/SturmB/zipcodes-distance/network/members
[stars-shield]: https://img.shields.io/github/stars/SturmB/zipcodes-distance.svg?style=for-the-badge
[stars-url]: https://github.com/SturmB/zipcodes-distance/stargazers
[issues-shield]: https://img.shields.io/github/issues/SturmB/zipcodes-distance.svg?style=for-the-badge
[issues-url]: https://github.com/SturmB/zipcodes-distance/issues
[license-shield]: https://img.shields.io/github/license/SturmB/zipcodes-distance.svg?style=for-the-badge
[license-url]: https://github.com/SturmB/zipcodes-distance/blob/main/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/mcgee
[product-screenshot]: images/screenshot.png
[laragon]: https://laragon.org/
[nvs]: https://github.com/jasongin/nvs
[composer]: https://getcomposer.org/
