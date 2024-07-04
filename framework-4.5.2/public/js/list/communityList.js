
/* 전역변수 시작 */
var fromDate;
var toDate;
/* 전역변수 끝 */




// 페이지 로드 시 초기화
document.addEventListener("DOMContentLoaded", ()=> {

    // 제목
    let inputTitle = document.getElementById("inputTitle");
    let inputTitleValue = inputTitle.value;

    //등록일자
    let from_date = document.getElementById("from_date");
    let fromDateValue = from_date.value;
    let to_date = document.getElementById("to_date");
    let toDateValue = to_date.value;

    //등록자
    let writer = document.getElementById("writer");
    let writerValue = document.getElementById("writer").value;
    
    
    today(fromDateValue);

    before1weekBtn(toDateValue);
});



// 오늘 날짜로 초기화
function today(){
    var date = new Date;
    let offset = date.getTimezoneOffset() * 60000; //ms단위라 60000곱해줌
    var today = new Date(date.getTime() - offset);
    console.log("today  : ", today);
    var formattedDate = today.toISOString().substring(0, 10);
    console.log("formattedDate : ", formattedDate);
    toDateValue = formattedDate;
    toDate = formattedDate; // forDate 초기화
    console.log("today 오늘날짜 : ", toDate);
}

// 1주 전으로 초기화
function before1weekBtn(){
    var beforeOneWeek = new Date();
    beforeOneWeek.setDate(beforeOneWeek.getDate() - 7); 
    console.log("beforeOneWeek  : ", beforeOneWeek);
    var formattedDate = beforeOneWeek.toISOString().substring(0, 10);
    console.log("formattedDate : ", formattedDate);
    fromDateValue = formattedDate;
    console.log("fromDateValue : ", fromDateValue);
    fromDate = formattedDate; // forDate 초기화
    console.log("1주전 날짜 : ", fromDate);
}

