<div class="modal-body">
    <div class="row">
        <div class="col-md-5">
            <div class="form-group">
                <label for="exampleInputFile">Escolhar
                    uma imagem 770x420</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="img" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile"></label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <label>{{ __('Título') }}</label>
            <div class="form-group">
                <input class="form-control" name="title" type="text" value="{{$data->title ?? old('title')}}" />
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <label>{{ __('Descrição') }}</label>
            <div class="form-group">
                <input class="form-control" name="desc" type="text" value="{{$data->desc ?? old('desc')}}" />
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <label>{{ __('Conteúdo') }}</label>
            <div class="form-group">
                <textarea name="content" id="edit" class="form-control" rows="5">
                    {{$data->content ?? old('content')}}
                </textarea>
            </div>
        </div>
    </div>
</div>