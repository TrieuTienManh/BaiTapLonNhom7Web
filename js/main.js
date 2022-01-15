// Học jQuery $(Selector).Acction(Function(){})
//  Học Khoảng 4 Trang giấy
$(document).ready(function(){
    // Luôn Đảm Bảo Chỉ Thực Hiện Nội Dung Bên trong 
    // Khi Tang Web Dowjc Tải Xong...(DOM)

    $("#MoreOptions").click(function(){
        if($("#MoreOptions").text()  == "More Options"){
            $("#more1").text("Profile Moreration");
            $("#more2").text("Add to Custom Feed");
            $("#more3").text("Invite someone to chat");
            $("#MoreOptions").text("Fewer Options");
            // $("p:odd").css("color","red");
            // :odd là chọn Các Phần Tử Vị Trí Chẵn nhưng vẫn cần hiểu bắt đầu từ 0 nên chẵn là các số i = lẻ, 
            //eq(i) là chọn Phần tử thứ i để tác động (Với i bắt đầu i=0)
        }else{
            $("#more1").text("");
            $("#more2").text("");
            $("#more3").text("");
            $("#MoreOptions").text("More Options");
        }
        
    })
})