<?= $this->extend('layout/frontend.php') ?>

<?= $this->section('scripts') ?>
<script src="/js/list/communityList.js"></script>
<script src="/js/list/table.js"></script>
<script type="text/javascript">

</script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="contents">
        <section>
            <div class="communityList-sectionContainer">
                <div class="communityList-categoryName"><div>커뮤니티</div></div>
                <div class="communityList-contentContainer">
                    <div class="communityList-contentTitle"><div>공지사항</div></div>
                    <div class="communityList-container">
                        <form action="">
                            <div class="communityList-selectContainer">
                                <div class="communityList-searchContainer">
                                    <div class="communityList-inputContainer001">
                                        <div class="communityList-inputContainer">
                                            <div>
                                                <div class="communityList-searchBox">제목</div>
                                                <div><input type="text" class="communityList-search" id="inputTitle" placeholder=" 제목을 입력해주세요"></div>
                                            </div>
                                            <div>
                                                <div class="communityList-searchBox">등록일자</div>
                                                <div><input type="date" class="communityList-dateInput-fromdate" id="from_date" value="2024-07-03"> ~ <input type="date" class="communityList-dateInput-todate" id="to_date" value="2024-07-03"></div>
                                            </div>
                                            <div>
                                                <div class="searchBox">등록자</div>
                                                <div><input type="text" class="communityList-inputWriter" id="writer" placeholder=" 등록자를 입력해주세요"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="communityList-numSelectContainer">
                                        <div>전체 : <span>00</span> 건</div>
                                        <div>
                                            <select name="options02" class="communityList-selectBox02" id="comboBox02">
                                                <option value="10">10개</option>
                                                <option value="15">15개</option>
                                                <option value="20">20개</option>
                                                <option value="25">25개</option>
                                                <option value="30">30개</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="communityList-inputContainer002">
                                    <div class="communityList-buttonContainer">
                                        <div><button class="communityList-btns" id="searchButton">검색</button></div>
                                        <div><button type="reset" class="communityList-btns" id="cencelButton">초기화</button></div>
                                    </div>
                                    <div class="communityList-buttonContainer01">
                                        <div class="communityList-writeButton"><a href="/writePage" ><div class="communityList-writeButtonInner"><div class="communityList-writeImg"><img src="/img/iconBTN_regist.png" class="communityList-writeImg" alt=""></div><div>등록</div></div></a></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="communityList-tpContainer">
                            <div class="communityList-tableContainer001">
                                <!-- <table class="communityTable">
                                    <thead>
                                        <tr>
                                            <th>번호</th>
                                            <th>제목</th>
                                            <th>등록자</th>
                                            <th>조회수</th>
                                            <th>등록일</th>
                                            <th>조회수</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>123456</td>
                                            <td>0000년 00월 00일 CCTV 통합관제센터 관제일지 상세</td>
                                            <td>이효진</td>
                                            <td><img src="/img/iconBTN_file.png" alt="" class="fileImg"></td>
                                            <td>0000-00-00</td>
                                            <td>0000</td>
                                        </tr>
                                        <tr>
                                            <td>123456</td>
                                            <td>0000년 00월 00일 CCTV 통합관제센터 관제일지 상세</td>
                                            <td>이효진</td>
                                            <td><img src="/img/iconBTN_file.png" alt="" class="fileImg"></td>
                                            <td>0000-00-00</td>
                                            <td>0000</td>
                                        </tr>
                                        <tr>
                                            <td>123456</td>
                                            <td>0000년 00월 00일 CCTV 통합관제센터 관제일지 상세</td>
                                            <td>이효진</td>
                                            <td><img src="/img/iconBTN_file.png" alt="" class="fileImg"></td>
                                            <td>0000-00-00</td>
                                            <td>0000</td>
                                        </tr>
                                        <tr>
                                            <td>123456</td>
                                            <td>0000년 00월 00일 CCTV 통합관제센터 관제일지 상세</td>
                                            <td>이효진</td>
                                            <td><img src="/img/iconBTN_file.png" alt="" class="fileImg"></td>
                                            <td>0000-00-00</td>
                                            <td>0000</td>
                                        </tr>
                                        <tr>
                                            <td>123456</td>
                                            <td>0000년 00월 00일 CCTV 통합관제센터 관제일지 상세</td>
                                            <td>이효진</td>
                                            <td><img src="/img/iconBTN_file.png" alt="" class="fileImg"></td>
                                            <td>0000-00-00</td>
                                            <td>0000</td>
                                        </tr>
                                        <tr>
                                            <td>123456</td>
                                            <td>0000년 00월 00일 CCTV 통합관제센터 관제일지 상세</td>
                                            <td>이효진</td>
                                            <td><img src="/img/iconBTN_file.png" alt="" class="fileImg"></td>
                                            <td>0000-00-00</td>
                                            <td>0000</td>
                                        </tr>
                                        <tr>
                                            <td>123456</td>
                                            <td>0000년 00월 00일 CCTV 통합관제센터 관제일지 상세</td>
                                            <td>이효진</td>
                                            <td><img src="/img/iconBTN_file.png" alt="" class="fileImg"></td>
                                            <td>0000-00-00</td>
                                            <td>0000</td>
                                        </tr>
                                        <tr>
                                            <td>123456</td>
                                            <td>0000년 00월 00일 CCTV 통합관제센터 관제일지 상세</td>
                                            <td>이효진</td>
                                            <td><img src="/img/iconBTN_file.png" alt="" class="fileImg"></td>
                                            <td>0000-00-00</td>
                                            <td>0000</td>
                                        </tr>
                                        <tr>
                                            <td>123456</td>
                                            <td>0000년 00월 00일 CCTV 통합관제센터 관제일지 상세</td>
                                            <td>이효진</td>
                                            <td><img src="/img/iconBTN_file.png" alt="" class="fileImg"></td>
                                            <td>0000-00-00</td>
                                            <td>0000</td>
                                        </tr>
                                        <tr>
                                            <td>123456</td>
                                            <td>0000년 00월 00일 CCTV 통합관제센터 관제일지 상세</td>
                                            <td>이효진</td>
                                            <td><img src="/img/iconBTN_file.png" alt="" class="fileImg"></td>
                                            <td>0000-00-00</td>
                                            <td>0000</td>
                                        </tr>
                                    </tbody>
                                </table> -->
                            </div>
                            <div class="communityList-pagenationContainer">
                                <div><a href="#" class="communityList-prev_arrow"><div class="communityList-prevArrow" alt=""></div></a></div>
                                <div><a href="#">1</a></div>
                                <div><a href="#">2</a></div>
                                <div><a href="#">3</a></div>
                                <div><a href="#">4</a></div>
                                <div><a href="#">5</a></div>
                                <div><a href="#" class="communityList-next_arrow"><div class="communityList-nextArrow" alt=""></div></a></div>
                            </div>
                        <div>
                    </div>
                </div>
            </div>
        </section>

</div>





<?= $this->endSection() ?>


