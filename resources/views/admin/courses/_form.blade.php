@if ($errors->any())
    <div style="margin: auto" class="alert alert-danger col-lg-12 col-xl-12">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

@endif
<!--begin: Form Wizard Step 1-->
<div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
    <div class="kt-heading kt-heading--md">Course Details:</div>
    <div class="kt-section kt-section--first">
        <div class="kt-wizard-v4__form">
            <div class="row">
                <div class="col-xl-12">
                    <div class="kt-section__body">
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-4 col-form-label">Course
                                Image</label>
                            <div class="col-lg-9 col-xl-8">
                                <div style="width: 100%" class="kt-avatar kt-avatar--outline" id="kt_user_add_avatar">
                                    <div class="kt-avatar__holder"
                                        style="width:100%;height: 300px; background-image:@if ($course->image == '') url({{ asset('dashbord/assets/media/default/450x300.jpg') }})
@else
url({{ asset('uploads/courses/' . $course->image) }}) @endif">
                                    </div>
                                    <label class="kt-avatar__upload" data-toggle="kt-tooltip" title=""
                                        data-original-title="Change avatar">
                                        <i class="fa fa-pen"></i>
                                        <input type="file" name="image">
                                    </label>
                                    <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title=""
                                        data-original-title="Cancel avatar">
                                        <i class="fa fa-times"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Course
                                Title</label>
                            <div class="col-lg-9 col-xl-9">
                                <input class="form-control" type="text" value="{{ $course->title }}" name="title"
                                    placeholder="Course Title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Owner
                                Name</label>
                            <div class="col-lg-9 col-xl-9">
                                <input class="form-control" type="text" value="{{ $course->owner }}" name="owner"
                                    placeholder="Owner Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Course
                                Description</label>
                            <div class="col-lg-9 col-xl-9">

                                <textarea name="description" id="mytextarea"class="form-control">{{ $course->description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Course
                                Price</label>
                            <div class="col-xl-3 col-lg-3">
                                <input class="form-control" value="{{ $course->price }}" type="text" name="price"
                                    placeholder="Price">
                            </div>
                            <label class="col-xl-3 col-lg-3 col-form-label">SalePrice</label>
                            <div class="col-xl-3 col-lg-3">
                                <input class="form-control" type="text" value="{{ $course->sale_price }}"
                                    name="sale_price" placeholder="Sale Price">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Category
                                Name</label>
                            <div class="col-lg-9 col-xl-9 form-group">
                                <select name="category_id" class="form-control">
                                    <option value="">Select</option>
                                    @foreach ($categories as $category)
                                        <option {{ $course->category_id == $category->id ? 'selected' : '' }}
                                            value="{{ $category->id }}">
                                            {{ $category->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
