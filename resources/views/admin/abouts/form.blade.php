<style>
    /* Card wrapper cho mỗi section để nổi khối */
    .custom-card {
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        padding: 1.5rem;
        margin-bottom: 1.5rem;
    }

    .custom-card .form-label {
        font-weight: 600;
    }

    .custom-card .required-label::after {
        content: "*";
        color: #e74c3c;
        margin-left: 4px;
    }

    /* Kết quả đạt được */
    .result-item {
        display: flex;
        align-items: center;
        margin-bottom: 0.75rem;
        padding: 0.5rem;
        border: 1px solid #ddd;
        border-radius: 6px;
    }

    .result-item input {
        flex: 1;
        margin-right: 0.5rem;
    }

    .result-item .btn {
        min-width: 36px;
    }

    /* Thumbnail preview */
    .thumb-wrapper {
        text-align: center;
    }

    .thumb-wrapper img {
        max-width: 100%;
        border-radius: 6px;
        margin-bottom: 0.5rem;
        border: 1px solid #ccc;
    }

    .thumb-wrapper .btn-upload {
        width: 100%;
    }
</style>

<div class="row">
    <div class="col-lg-8">
        <div class="custom-card">
            <div class="form-group custom-group mb-4">
                <label class="form-label required-label">Tiêu đề</label>
                <input type="text" class="form-control" ng-model="form.title">
                <div class="invalid-feedback d-block"><% errors.title[0] %></div>
            </div>

            <div class="form-group custom-group mb-4">
                <label class="form-label required-label">Đôi nét về công ty</label>
                <textarea rows="5" class="form-control" ng-model="form.intro"></textarea>
                <div class="invalid-feedback d-block"><% errors.intro[0] %></div>
            </div>

            <div class="form-group custom-group mb-4">
                <label class="form-label required-label">Giới thiệu chi tiết</label>
                <textarea ck-editor rows="4" class="form-control" ng-model="form.service_description"></textarea>
                <div class="invalid-feedback d-block"><% errors.service_description[0] %></div>
            </div>

            {{-- <div class="form-row">
                <div class="form-group col-md-6 mb-4">
                    <label class="form-label">Dịch vụ nổi bật</label>
                    <input type="text" class="form-control" ng-model="form.service_title">
                    <div class="invalid-feedback d-block"><% errors.service_title[0] %></div>
                </div>
                <div class="form-group custom-group col-md-6 mb-4">
                    <label class="form-label">Mô tả dịch vụ nhanh</label>
                    <textarea rows="2" class="form-control" ng-model="form.service_description"></textarea>
                    <div class="invalid-feedback d-block"><% errors.service_description[0] %></div>
                </div>
            </div> --}}

            {{-- <div class="form-row">
                <div class="form-group custom-group col-md-6 mb-4">
                    <label class="form-label">Số năm kinh nghiệm</label>
                    <input type="text" class="form-control" ng-model="form.experience_number">
                    <div class="invalid-feedback d-block"><% errors.experience_number[0] %></div>
                </div>
                <div class="form-group custom-group col-md-6 mb-4">
                    <label class="form-label">Giới thiệu kinh nghiệm</label>
                    <input type="text" class="form-control" ng-model="form.experience_text">
                    <div class="invalid-feedback d-block"><% errors.experience_text[0] %></div>
                </div>
            </div>

            <div class="form-group custom-group mb-5">
                <label class="form-label required-label">Hotline</label>
                <input type="tel" class="form-control" ng-model="form.phone_number">
                <div class="invalid-feedback d-block"><% errors.phone_number[0] %></div>
            </div> --}}

            {{-- <div class="form-group">
                <label class="form-label">Kết quả đạt được</label>
                <div ng-repeat="(idx, item) in form.results" class="result-item">
                    <input type="text" class="form-control" placeholder="Nhập kết quả" ng-model="item.title" />
                    <button type="button" class="btn btn-success" ng-click="form.addResult()">
                        <i class="fa fa-plus"></i>
                    </button> &nbsp;
                    <button type="button" ng-if="idx" class="btn btn-danger" ng-click="form.removeResult(idx)">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
                <div class="invalid-feedback d-block"><% errors.results %></div>
            </div> --}}

            <hr>

            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label class="form-label">Video</label>
                        <input type="text" class="form-control" ng-model="form.video_url">
                        <div class="invalid-feedback d-block"><% errors.video_url[0] %></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- Ảnh video -->
                    <div class="form-group text-center">
                        <div class="main-img-preview">
                            <label class="required-label">Ảnh video</label>
                            <p class="help-block-img">* Ảnh định dạng: jpg, png</p>
                            <img class="thumbnail img-preview" ng-src="<% form.video_image.path %>">
                        </div>
                        <div class="input-group" style="width: 100%; text-align: center">
                            <div class="input-group-btn" style="margin: 0 auto">
                                <div class="fileUpload fake-shadow cursor-pointer">
                                    <label class="mb-0" for="<% form.video_image.element_id %>">
                                        <i class="glyphicon glyphicon-upload"></i> Chọn ảnh
                                    </label>
                                    <input class="d-none" id="<% form.video_image.element_id %>" type="file"
                                        class="attachment_upload" accept=".jpg,.jpeg,.png">
                                </div>
                            </div>
                        </div>
                        <span class="invalid-feedback d-block" role="alert">
                            <strong><% errors.video_image[0] %></strong>
                        </span>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="col-lg-4">
        <div class="card mb-4">
            <div class="card-header text-center ">
                <h5>Ảnh mô tả</h5>
            </div>
            <div class="card-body">
                <!-- Ảnh đại diện -->
                <div class="form-group text-center">
                    <div class="main-img-preview">
                        <label class="required-label">Ảnh đại diện</label>
                        <p class="help-block-img">* Ảnh định dạng: jpg, png</p>
                        <img class="thumbnail img-preview" ng-src="<% form.image.path %>">
                    </div>
                    <div class="input-group" style="width: 100%; text-align: center">
                        <div class="input-group-btn" style="margin: 0 auto">
                            <div class="fileUpload fake-shadow cursor-pointer">
                                <label class="mb-0" for="<% form.image.element_id %>">
                                    <i class="glyphicon glyphicon-upload"></i> Chọn ảnh
                                </label>
                                <input class="d-none" id="<% form.image.element_id %>" type="file"
                                    class="attachment_upload" accept=".jpg,.jpeg,.png">
                            </div>
                        </div>
                    </div>
                    <span class="invalid-feedback d-block" role="alert">
                        <strong><% errors.image[0] %></strong>
                    </span>
                </div>

                <hr>

                <!-- Ảnh bìa -->
                <div class="form-group text-center">
                    <div class="main-img-preview">
                        <label class="required-label">Ảnh mô tả 1</label>
                        <p class="help-block-img">* Ảnh định dạng: jpg, png</p>
                        <img class="thumbnail img-preview" ng-src="<% form.image_front.path %>">
                    </div>
                    <div class="input-group" style="width: 100%; text-align: center">
                        <div class="input-group-btn" style="margin: 0 auto">
                            <div class="fileUpload fake-shadow cursor-pointer">
                                <label class="mb-0" for="<% form.image_front.element_id %>">
                                    <i class="glyphicon glyphicon-upload"></i> Chọn ảnh
                                </label>
                                <input class="d-none" id="<% form.image_front.element_id %>" type="file"
                                    class="attachment_upload" accept=".jpg,.jpeg,.png">
                            </div>
                        </div>
                    </div>
                    <span class="invalid-feedback d-block" role="alert">
                        <strong><% errors.image_front[0] %></strong>
                    </span>
                </div>
                <hr>
                <div class="form-group text-center">
                    <div class="main-img-preview">
                        <label class="required-label">Ảnh mô tả 2</label>
                        <p class="help-block-img">* Ảnh định dạng: jpg, png</p>
                        <img class="thumbnail img-preview" ng-src="<% form.image_back.path %>">
                    </div>
                    <div class="input-group" style="width: 100%; text-align: center">
                        <div class="input-group-btn" style="margin: 0 auto">
                            <div class="fileUpload fake-shadow cursor-pointer">
                                <label class="mb-0" for="<% form.image_back.element_id %>">
                                    <i class="glyphicon glyphicon-upload"></i> Chọn ảnh
                                </label>
                                <input class="d-none" id="<% form.image_back.element_id %>" type="file"
                                    class="attachment_upload" accept=".jpg,.jpeg,.png">
                            </div>
                        </div>
                    </div>
                    <span class="invalid-feedback d-block" role="alert">
                        <strong><% errors.image_back[0] %></strong>
                    </span>
                </div>

            </div>
        </div>

    </div>
</div>

<div class="text-right mt-3">
    <button type="submit" class="btn btn-success px-4" ng-click="submit(0)" ng-disabled="loading.submit">
        <i ng-if="!loading.submit" class="fa fa-save"></i>
        <i ng-if="loading.submit" class="fa fa-spin fa-spinner"></i>
        Lưu
    </button>
</div>
