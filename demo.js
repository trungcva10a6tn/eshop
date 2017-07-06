function load_img(d) {
    this.url = document.getElementsByClassName(d);
    this.doing=0;
    this.next= function () {
        if(this.doing < 3){
            console.log(this.url[this.doing].innerHTML);
            this.get_reset();
            this.get_atived();
            this.doing++;
        }else {
            this.doing=0;
            this.next();
        }
    }
    this.get_atived = function () {
        this.url[this.doing].style.opacity="1";
    }
    this.get_reset= function () {
        for (var i=0 ;i < this.url.length ; i++){
            this.url[i].style.opacity="0";
        }
    }
}
function autoload() {
    load_img.next();
    setTimeout(autoload,5000);
}
var load_img= new load_img("img01");
autoload();