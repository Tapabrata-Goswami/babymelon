function remo(){
    $(".m").addClass("bcl")
}
$("#home").click(()=>{  
    remo()
    $(".hom").removeClass("bcl")
    $(".hom").addClass("cl")
})
$("#shop").click(()=>{  
    remo()
    $(".sho").removeClass("bcl")
    $(".sho").addClass("cl")
})     
}    
/* and (min-width: 400px) */



$("#about").click(()=>{  
    remo()
    $(".about").removeClass("bcl")
    $(".about").addClass("cl")
}) 
$("#blogs").click(()=>{  
    remo()
    $(".blog").removeClass("bcl")
    $(".blog").addClass("cl")
}) 
$(".bar").click(()=>{
    $(".j").removeClass("n1")
    $(".j").addClass("b3")
    $(".bar").removeClass("b3")
    $(".bar").addClass("n1")
    $(".cro").removeClass("n1")
    $(".cro").addClass("b3") 

})
$(".cro").click(()=>{
    $(".j").removeClass("b3")
    $(".j").addClass("n1")
    $(".cro").removeClass("b3") 
    // $(".cro").addClass("")
    $(".bar").addClass("b3")
})