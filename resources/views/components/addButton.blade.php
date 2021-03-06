<a class="btn btn-sm btn-outline-secondary bg-black" type="button" data-bs-toggle="modal" href="#exampleModalToggle"
    role="button">
    Add_New_Url
</a>

<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title text-primary" id="exampleModalToggleLabel">Adding a new URL</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form action="{{ route('Chain.Account.Auth.Add_Short_Link') }}" method="POST">
                        @csrf
                        <div class="row gutters">
                            <div class="mb-1">
                                <label class="form-label ms-1 fs-6 fw-bold">Website Name</label>
                                <input type="text" name="website_name"
                                    class="form-control @error('website_name') is-invalid  @enderror "
                                    placeholder="Enter website name" value="{{ old('website_name') }}" required
                                    autofocus>
                                @error('website_name')
                                    <small class="text-danger">
                                        {{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label ms-1 fs-6 fw-bold">URL</label>
                                <input type="text" name="url_request"
                                    class="form-control mb-0 @error('url_request') is-invalid  @enderror "
                                    placeholder="Enter new URL" value="{{ old('url_request') }}" required autofocus>
                                @error('url_request')
                                    <small class="text-danger">
                                        {{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-1">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-warning">+Add</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
