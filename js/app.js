const product_single_image_main = document.querySelector("#product-single-image-main");
const product_image_thumbs = document.querySelector('.product-image-thumbs');


function show_image_thumb_as_main(e){
    if(product_single_image_main){
        product_single_image_main.src = e.target.src ;
    }
}




const photoPreview = document.querySelector('.photo-preview');
const preview = document.querySelector('.preview');
const mobilemenu_content = document.querySelector('.mobilemenu-content');
const header_side_panel = document.querySelector('.mobile-nav-links-con');
const mobile_nav_con = document.querySelector('.mobile-nav-con');



function openPhoto(e,photoUrl){
    e.preventDefault();
    if(photoPreview != null & preview != null){
        photoPreview.classList.remove('hide');
        preview.style.backgroundImage =`url('${photoUrl}')`;
    }
}

function closePhoto(){
    if(photoPreview){
        photoPreview.classList.add('hide')
    }
}

function setPreviewToFalse(){
    if(photoPreview){
    photoPreview.classList.add('hide');
    }
}

function openMobileNav(e){
    e.preventDefault();
    header_side_panel.classList.remove('hidden');
    mobile_nav_con.classList.add('transitionElement');
    mobile_nav_con.classList.remove('removetransitionElement');
    // mobilemenu_content.classList.add('openNav');
}

function closeNav(){
    header_side_panel.classList.add('hidden');
    console.log(mobile_nav_con)
    mobile_nav_con.classList.remove('transitionElement');
    mobile_nav_con.classList.add('removetransitionElement');
   
    // mobilemenu_content.classList.add('openNav');
}