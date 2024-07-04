<?= $this->extend('layout/frontend.php') ?>

<?= $this->section('scripts') ?>
<script type="text/javascript">

</script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="contents">
    <section>
        <div class="communityWrite-sectionContainer">
            <div class="communityWrite-categoryName"><div>커뮤니티</div></div>
            <div class="communityWrite-contentContainer">
                <div class="communityWrite-titleContainer">
                    <div class="communityWrite-contentTitle"><div>공지사항 등록</div></div>
                    <div class="communityWrite-contentSuvTitle"><div class="communityWrite-redPoint">* </div><div>필수입력사항</div></div>
                </div>
                <div class="communityWrite-container">
                    <form action="">
                        <div class="communityWrite-tableContainer">

                            <table class="communityWrite-writeTable">
                                <tbody>
                                    <tr>
                                        <th colspan='2' class="communityWrite-longTH"><div class="communityWrite-pointContainer"><div class="searchTitle">제목</div><div class="communityWrite-redPoint">* </div></div></th>
                                        <td colspan='4' class="communityWrite-longTD"><div><input type="text" class="communityWrite-tilteInput" id="inputTitle" placeholder=" 제목을 입력해주세요"></div></td>
                                    </tr>
                                    <tr>
                                        <th colspan='2'  class="communityWrite-longTH"><div class="communityWrite-pointContainer"><div class="communityWrite-searchTitle">작성자</div><div class="communityWrite-redPoint">* </div></div></th>
                                        <td colspan='4' class="communityWrite-longTD"> <div><input type="text" class="communityWrite-writerInput" id="writer" placeholder=" 등록자를 입력해주세요"></div></td>
                                    </tr>
                                    <tr>
                                        <th colspan='2' class="communityWrite-fatTH"><div class="communityWrite-pointContainer"><div class="communityWrite-searchTitle">내용입력</div><div class="communityWrite-redPoint">* </div></div></th>
                                        <td colspan='4' class="communityWrite-fatTD"><div><textarea class="communityWrite-contentInput" id="contents" placeholder=" 내용을 입력해주세요"></textarea></div></td>
                                    </tr>
                                    <tr>
                                        <th colspan='2' class="communityWrite-shortTH">첨부파일1</th>
                                        <td colspan='' class="communityWrite-shortTD">
                                            <div class="communityWrite-fileContent">
                                                <div><input type="text" class="communityWrite-fileUpload" id="fileUpload01" placeholder=" 첨부할 파일을 등록해주세요"></div>
                                                <div><button type="button" class="communityWrite-searchBtns" id="fileSearch">찾아보기</button></div>
                                            </div>
                                        </td>
                                        <th colspan='2' class="communityWrite-shortTH">첨부파일2</th>
                                        <td colspan='' class="communityWrite-shortTD">
                                            <div class="communityWrite-fileContent">
                                                <div><input type="text" class="communityWrite-fileUpload" id="fileUpload01" placeholder=" 첨부할 파일을 등록해주세요"></div>
                                                <div><button type="button" class="communityWrite-searchBtns" id="fileSearch">찾아보기</button></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th colspan='2' class="communityWrite-shortTH">첨부파일3</th>
                                        <td colspan='' class="communityWrite-shortTD">
                                            <div class="communityWrite-fileContent">
                                                <div><input type="text" class="communityWrite-fileUpload" id="fileUpload01" placeholder=" 첨부할 파일을 등록해주세요"></div>
                                                <div><button type="button" class="communityWrite-searchBtns" id="fileSearch">찾아보기</button></div>
                                            </div>
                                        </td>
                                        <th colspan='2' class="communityWrite-shortTH">첨부파일4</th>
                                        <td colspan='' class="communityWrite-shortTD">
                                            <div class="communityWrite-fileContent">
                                                <div><input type="text" class="communityWrite-fileUpload" id="fileUpload01" placeholder=" 첨부할 파일을 등록해주세요"></div>
                                                <div><button type="button" class="communityWrite-searchBtns" id="fileSearch">찾아보기</button></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th colspan='2' class="communityWrite-shortTH">첨부파일5</th>
                                        <td colspan='4' class="communityWrite-longTD">
                                            <div class="communityWrite-fileContent">
                                                <div><input type="text" class="communityWrite-fileUpload" id="fileUpload01" placeholder=" 첨부할 파일을 등록해주세요"></div>
                                                <div><button type="button" class="communityWrite-searchBtns" id="fileSearch">찾아보기</button></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="communityWrite-buttonContainer">
                            <div><button type="button" class="communityWrite-btns" id="searchButton">저장</button></div>
                            <div><a href="/"><button type="button" class="communityWrite-btns" id="goListButton">목록</button></a></div>
                        </div>
                </form>
                </div>
            </div>
        </div>
    </section>
</div>





<?= $this->endSection() ?>


