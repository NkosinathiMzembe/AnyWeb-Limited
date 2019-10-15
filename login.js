
    
    
      const login = document.querySelectorAll(".modal");
      M.Modal.init(login,{
        opacity:0.7,
        dismissible:false
      });
      
      document.querySelector("#content").style.display="none";
      document.querySelector("#flayer").classList.add("progress");
      document.querySelector("#slayer").classList.add("indeterminate");
      
      setTimeout(function(){
          document.querySelector("#flayer").classList.remove("progress");
          document.querySelector("#slayer").classList.remove("indeterminate");
          document.querySelector("#content").style.display="block";
      },3000)
    