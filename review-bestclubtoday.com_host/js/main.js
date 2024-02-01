"use strict"

document.documentElement.classList.add("loaded"); // когда страница загрузилась

window.addEventListener("DOMContentLoaded", windowLoad); // для анимации для первых экранов, чтобы ничего не дергалось

function windowLoad() {}; // для анимации для первых экранов, чтобы ничего не дергалось


// Открытие и закрытие бургера

const menu = document.querySelector(".header__menu");

document.addEventListener("click", function (e) {

  const elementInteractive = e.target;

  if (elementInteractive.closest(".burger")) { // Открытие и закрытие бургера
    menu.classList.add("active")
    document.body.style.overflow = "hidden";
  }
  if (elementInteractive.closest(".header__exit-menu")) { // Открытие и закрытие бургера 
    menu.classList.remove("active")
    document.body.style.overflow = "";
  }
  if (elementInteractive.closest(".nav__link")) { // Открытие и закрытие бургера
    menu.classList.remove("active")
    document.body.style.overflow = "";
  }
})

// Плагин загрузки изображений и видео

const rdUpload = document.querySelectorAll(".rd-upload");

const body = document.body;

if (rdUpload) {
  const options = {
    root: null,
    rootMargin: '0px',
    threshold: 0,
  }

  const callback = function (entries, observer) {

    entries.forEach(entry => {
      const elementEntry = entry.target;
      if (entry.isIntersecting) {

        if (!elementEntry.classList.contains("rd-load")) {
          elementEntry.classList.add("rd-load");

          let rdUploadBackgroundImage = elementEntry.querySelectorAll(".rd-background");

          let rdUploadImage = elementEntry.querySelectorAll("img");

          let rdUploadVideo = elementEntry.querySelectorAll("video");

          let rdUploadPicture = elementEntry.querySelectorAll("picture");

          if (elementEntry.classList.contains("rd-background")) {

            let elementEntryBackgroundImageDataImage = elementEntry.dataset.rdImage;

            elementEntry.style.backgroundImage = `url(${elementEntryBackgroundImageDataImage})`;
          }

          if (rdUploadBackgroundImage) {
            rdUploadBackgroundImage.forEach(function (rdUploadBackgroundImage) {

              let rdUploadBackgroundImageDataImage = rdUploadBackgroundImage.dataset.rdImage;

              rdUploadBackgroundImage.style.backgroundImage = `url(${rdUploadBackgroundImageDataImage})`;

            })
          }

          if (rdUploadImage) {
            rdUploadImage.forEach(function (rdUploadImage) {

              if (!rdUploadImage.closest("picture")) {
                let rdUploadImageDataImage = rdUploadImage.dataset.rdImage;

                rdUploadImage.setAttribute("src", `${rdUploadImageDataImage}`);
              }

            })
          }

          if (rdUploadPicture) {
            rdUploadPicture.forEach(function (rdUploadPicture) {

              let rdUploadPictureSource = rdUploadPicture.querySelectorAll("source");

              rdUploadPictureSource.forEach(function (rdUploadPictureSource) {

                let rdUploadPictureSourceImage = rdUploadPictureSource.dataset.rdImage;

                rdUploadPictureSource.setAttribute("srcset", `${rdUploadPictureSourceImage}`);

              })

            })
          }

          if (rdUploadVideo) {
            rdUploadVideo.forEach(function (rdUploadVideo) {

              let rdUploadVideoDataVideo = rdUploadVideo.dataset.rdVideo;
              let rdUploadVideoDataImage = rdUploadVideo.dataset.rdImage;

              rdUploadVideo.setAttribute("src", `${rdUploadVideoDataVideo}`);

              rdUploadVideo.setAttribute("poster", `${rdUploadVideoDataImage}`);

            })
          }
        }

      }

    })

  }

  const observer = new IntersectionObserver(callback, options);

  rdUpload.forEach(i => {
    observer.observe(i);
  })
}

const footerContainer = document.querySelector('.footer__container');

const support = document.querySelector(".support");

const slotsItem = document.querySelectorAll('.slots__item');

const contactsAddress = document.querySelector('.contacts__address');

const contactsRight = document.querySelector(".contacts__right");

if (footerContainer) {
  if (support) {
    if (document.body.clientWidth < 992) {
      footerContainer.append(support);
    }
  }
}

if (contactsRight) {
  if (contactsAddress) {
    if (document.body.clientWidth < 992) {
      contactsRight.append(contactsAddress);
    }
  }
}

if (document.body.clientWidth < 992) {
  if (slotsItem) {
    slotsItem.forEach(function (e) {
      if(e.querySelector(".slots__link")) {
        e.append(e.querySelector(".slots__link"));
      } 
    })
  }
}