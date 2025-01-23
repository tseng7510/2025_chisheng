$(function () {
  $('.popup-gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0, 1],
    },
    image: {
      tError: '無法讀取 <a href="%url%">這張圖片 #%curr%</a>',
      // titleSrc: function(item) {
      //   return item.el.attr('title');
      // }
    },
  });
});
