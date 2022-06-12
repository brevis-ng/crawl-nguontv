<?php
foreach (get_plugins() as $key=>$value){
    if($value['Name']=='Movies Crawler'){
        $thisversion= $value['Version'];
    }
}

$plugin_path = plugin_dir_url( __DIR__ );
?>

<div class="container-lg mt-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card-md">
                    <div class="card-header text-center h4">
                        Moives Crawler <?php echo $thisversion?>
                    </div>
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <input type="hidden" id="plugin_path" name="plugin_path" value="<?php echo $plugin_path?>">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Nhập vào JSON API</span>
                            <input type="text" class="form-control" id="jsonapi-url" value="https://api.nguonphim.tv/api.php/provide/vod/?ac=list" placeholder="https://api.nguonphim.tv/api.php/provide/vod/?ac=list">
                            <button class="btn btn-primary" type="button" id="api-check">Kiểm Tra</button>
                        </div>
                        <div id="alert-box" class="alert" style="display: none;" role="alert"></div>
                    </div>
                    <div id="content" class="card-body">
                        <div class="card-title">Thông Tin Nguồn Phim: </div>
                        <ul id="server-info" class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Tổng số bộ phim
                                <span id="movies-total" class="badge bg-primary rounded-pill"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Tổng số page
                                <span id="last-page" class="badge bg-primary rounded-pill"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Số phim mỗi page
                                <span id="per-page" class="badge bg-primary rounded-pill"></span>
                            </li>
                        </ul>
                    </div>
                    <div id="movies-list" class="card-body" style="display: none;">
                        <div class="card-title" id="current-page-crawl">
                            <h4 id="h4-current-page" class="position-absolute">Page 1</h4>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end me-5">
                                <button id="pause-crawl" type="button" class="btn btn-warning">Dừng</button>
                                <button id="resume-crawl" type="button" class="btn btn-warning">Tiếp tục</button>
                            </div>
                        </div>
                        <table class="table" id="movies-table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Tên Phim</th>
                                    <th scope="col">Thể Loại</th>
                                    <th scope="col">Cập nhật</th>
                                    <th scope="col">Quá trình</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <button id="roll-crawl" type="button" class="btn btn-success position-absolute">Trộn Link</button>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button id="update-crawl" type="button" class="btn btn-warning">Thu Thập Hôm Nay</button>
                            <button id="full-crawl" type="button" class="btn btn-primary">Thu Thập Toàn Bộ</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>