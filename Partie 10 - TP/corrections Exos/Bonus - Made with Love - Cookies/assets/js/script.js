var like = document.getElementsByClassName("like");

for (let item of like) {
  item.addEventListener('click', function(){
    if(this.classList.contains("no_liked")){
      this.classList.add("liked");
      this.classList.remove("no_liked");
    }else{
      this.classList.add("no_liked");
      this.classList.remove("liked");
    }

  })
}

  

