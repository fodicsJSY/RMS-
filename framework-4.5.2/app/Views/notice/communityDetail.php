<?= $this->extend('layout/frontend.php') ?>

<?= $this->section('scripts') ?>
<script type="text/javascript">

</script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="contents">
    <section>
        <div class="communityDetail-sectionContainer">
            <div class="communityDetail-categoryName"><div>커뮤니티</div></div>
            <div class="communityDetail-contentContainer">
                <div class="communityDetail-titleContainer">
                    <div class="communityDetail-contentTitle"><div>공지사항 상세</div></div>
                    <!-- <div class="contentSuvTitle"><div class="redPoint">* </div><div>필수입력사항</div></div> -->
                </div>
                <div class="communityDetail-container">
                    <div class="communityDetail-tableContainer">
                        <table class="communityDetail-writeTable">
                            <tbody>
                                <tr>
                                    <th colspan='2' class="communityDetail-longTH"><div class="communityDetail-searchTitle">제목</div></th>
                                    <td colspan='4' class="communityDetail-longTD"><div>제목입니다.</div></td>
                                </tr>
                                <tr>
                                    <th colspan='2'  class="communityDetail-longTH"> <div class="communityDetail-searchTitle">작성자</div></th>
                                    <td colspan='4' class="communityDetail-longTD"> <div>작성자입니다.</div></td>
                                </tr>
                                <tr>
                                    <th colspan='2' class="communityDetail-fatTH"><div class="communityDetail-searchTitle">상세내용</div></th>
                                    <td colspan='4' class="communityDetail-fatTD"><div>내용입니다.</div></td>
                                </tr>
                                <tr>
                                    <th colspan='2' class="communityDetail-shortTH">첨부파일1</th>
                                    <td colspan='' class="communityDetail-shortTD">
                                        <div class="communityDetail-fileContent">
                                            2024000000fasdfa3254334.jpg
                                        </div>
                                    </td>
                                    <th colspan='2' class="communityDetail-shortTH">첨부파일2</th>
                                    <td colspan='' class="communityDetail-shortTD">
                                        <div class="communityDetail-fileContent">
                                            첨부파일 없음
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th colspan='2' class="communityDetail-shortTH">첨부파일3</th>
                                    <td colspan='' class="communityDetail-shortTD">
                                        <div class="communityDetail-fileContent">
                                            첨부파일 없음
                                        </div>
                                    </td>
                                    <th colspan='2' class="communityDetail-shortTH">첨부파일4</th>
                                    <td colspan='' class="communityDetail-shortTD">
                                        <div class="communityDetail-fileContent">
                                            첨부파일 없음
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th colspan='2' class="communityDetail-shortTH">첨부파일5</th>
                                    <td colspan='4' class="communityDetail-longTD">
                                        <div class="communityDetail-fileContent">
                                            첨부파일 없음
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="communityDetail-buttonContainer">
                        <div><a href="/"><button type="button" class="communityDetail-btns" id="goListButton">목록</button></a></div>
                    </div>
                    <form action="">
                        <div class="communityDetail-inputContainer">
                            <div class="communityDetail-commentContainer">
                                <div>댓글</div>
                                <div><textarea name="inputComment" class="communityDetail-commentInput" id="comment"></textarea></div>
                            </div>
                            <div class="communityDetail-fileUploadContainer">
                                <div>
                                    <div>첨부파일</div>
                                    <div class="communityDetail-fileUploadContainer001">
                                        <div><input type="text" class="communityDetail-fileUpload"></div>
                                        <div><button class="communityDetail-searchBtns">찾아보기</button></div>
                                    </div>
                                </div>
                                <div><button class="communityDetail-btns">등록</button></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>





<?= $this->endSection() ?>


