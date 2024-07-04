// 페이지 로드 시 초기화
document.addEventListener("DOMContentLoaded", ()=> {
    makeTable();
});


function makeTable(){
    console.log("테이블 만들기");



    var tableContainer = document.querySelector(".tableContainer");
    tableContainer.innerHTML = ""; // Clear previous data

    var div = document.createElement("div");
    tableContainer.appendChild(div);

    var communityTable = document.createElement("table");
    communityTable.className = "communityTable";
    div.appendChild(communityTable);

    var thead = document.createElement("thead");
    // gateThead.className = "gateThead";
    communityTable.appendChild(thead);

    var htr = document.createElement("tr");
    thead.appendChild(htr);

    createCellNoClassName(htr, "th", "번호");
    createCellNoClassName(htr, "th", "제목");
    createCellNoClassName(htr, "th", "등록자");
    createCellNoClassName(htr, "th", "첨부파일");
    createCellNoClassName(htr, "th", "등록일");
    createCellNoClassName(htr, "th", "조회수");


    var tbody = document.createElement("tbody");
    // gateTbody.className = "gateTbody";
    communityTable.appendChild(tbody);

    for(let i =0; i<10; i++){

        
        var tr = document.createElement("tr");
        tbody.appendChild(tr);
        
        let fileImg =  document.createElement("img");
        fileImg.className = "fileImg";
        fileImg.src = "/img/iconBTN_file.png";
        
        createCellNoClassName(tr, "td", "123456");
        createCellNoClassName(tr, "td", "0000년 00월 00일 CCTV 통합관제센터 관제일지 상세");
        createCellNoClassName(tr, "td", "이효진");
        createCellNoClassName(tr, "td", fileImg.outerHTML);
        createCellNoClassName(tr, "td", "0000-00-00");
        createCellNoClassName(tr, "td", "0000");
    }


    // // 데이터 삽입
    // tableDataList.forEach(function (item) {    
    
    // });
}


// 셀 생성 함수
function createCellNoClassName(row, elementType, content) {
    var cell = document.createElement(elementType);
    
    // 이미지 엘리먼트인 경우에는 바로 추가
    if (typeof content === 'object' && content instanceof HTMLElement) {
        cell.appendChild(content);
    } else {
        cell.innerHTML = content;
    }

    row.appendChild(cell);
}





// 셀 생성 함수
function createCell(row, elementType, className, content) {
    var cell = document.createElement(elementType);
    cell.className = className;
    
    // 이미지 엘리먼트인 경우에는 바로 추가
    if (typeof content === 'object' && content instanceof HTMLElement) {
        cell.appendChild(content);
    } else {
        cell.innerHTML = content;
    }

    row.appendChild(cell);
}

