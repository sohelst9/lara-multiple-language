<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('data.site_title') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <div class="card mt-5">
                    <div class="card-header bg-dark d-flex align-item-center justify-content-between">
                        <h3 class="text-light">{{ __('data.header_title') }}</h3>
                        <div class="select_language">
                            <select name="language" id="" class="form-control changeLang">
                                <option value="en" {{ session()->get('locate') == 'en' ? 'selected': '' }}>English</option>
                                <option value="bn" {{ session()->get('locate') == 'bn' ? 'selected' : '' }}>Bangla</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="blog">
                                    <h4 class="title">{{ __('data.first_post_title') }}</h4>
                                    <p class="description">
                                       {{ __('data.first_post_description') }}
                                    </p>
                                    <div class="blog_footer">
                                        <h6>{{ __('data.first_post_author') }}</h6>
                                        <a href="" class="read_more">{{ __('data.post_button') }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog">
                                    <h4 class="title">{{ __('data.second_post_title') }}</h4>
                                    <p class="description">
                                        {{ __('data.second_post_description') }}
                                    </p>
                                    <div class="blog_footer">
                                        <h6>{{ __('data.second_post_author') }}</h6>
                                        <a href="" class="read_more">{{ __('data.post_button') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        var url = "{{ route('change_language') }}";
        $('.changeLang').change(function(){
            window.location.href = url + '?language=' + $(this).val();
        })
    </script>
</body>

</html>
