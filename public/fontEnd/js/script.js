// var divOne = document.getElementById('divOne');
// var bodyTag = document.getElementById('my-body');
// var btn1 = document.getElementById('btn1');
// var btn2 = document.getElementById('btn2');
// var btn3 = document.getElementById('btn3');
// var btn4 = document.getElementById('btn4');
//
// btn1.onclick = function () {
//     bodyTag.style.backgroundColor = 'yellow';
//     // divOne.style.borderRadius = '0%'
// }
//
// btn2.onclick = function () {
//     divOne.style.backgroundColor = 'green';
//     divOne.style.borderRadius = '50%'
// }
//
// btn3.onclick = function () {
//     divOne.style.backgroundColor = 'skyblue';
//     divOne.style.fontFamily = 'Arial';
//     divOne.style.fontSize = '40px'
//     divOne.style.visibility = 'visible'
// }
//
// divOne.onmouseover = function () {
//     divOne.style.transition = 'all 2s'
//     divOne.style.margin = '100px'
//     divOne.style.backgroundColor = 'orange'
//     divOne.style.transform = 'rotate(90deg)'
// }

//alert(mainImage.getAttribute('src'));
//mainImage.setAttribute('src','images/02.jpg')

// var mainImage = document.getElementById('mainImage');
//
// var img1 = document.getElementById('img1');
// img1.onclick = function () {
//     var changeImg = img1.getAttribute('src');
//     mainImage.setAttribute('src',changeImg);
// }
// var img2 = document.getElementById('img2');
// img2.onclick = function () {
//     var changeImg = img2.getAttribute('src');
//     mainImage.setAttribute('src',changeImg);
// }

// var imageData = ['images/02.jpg','images/03.jpg','images/01.png','images/04.jpg'];
// var index = 0;
//
// function slideImage() {
//     var mainImage = document.getElementById('mainImage');
//     mainImage.setAttribute('src',imageData[index]);
//     index++;
//     if(index >= imageData.length){
//         index = 0;
//     }
// }
//
// setInterval(slideImage, 2000)


// $('#heading1').text('This is from jquery')

// $('#btn').click(function () {
//     var firstName = $('#firstName').val();
//     var lastName = $('#lastName').val();
//     $('#fullName').val(firstName+" "+lastName);
// })

// $('#firstName').keyup(function () {
//     var firstName = $('#firstName').val();
//     $('#f1').text(firstName);
// })
//
// $('#lastName').keyup(function () {
//     var lastName = $('#lastName').val();
//     $('#f2').text(lastName);
// })
//
// $('#lastName,#firstName').keyup(function () {
//     var firstName = $('#firstName').val();
//     var lastName = $('#lastName').val();
//     $('#f3').text(firstName+' '+lastName);
// })

// $('#btn1').click(function () {
//     $('.my-div').slideUp(2000)
// })
// $('#btn2').click(function () {
//     $('.my-div').slideDown(2000)
// })
// $('#btn3').click(function () {
//     $('.my-div').slideToggle()
// })


$('#slideShow div:gt(0)').hide();

setInterval(function () {
    $('#slideShow div:first')
        .fadeOut(3000)
        .next()
        .fadeIn(3000)
        .end()
        .appendTo('#slideShow');
}, 2000)

























