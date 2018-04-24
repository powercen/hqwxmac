<form action="{{ route('tags.update', ['tag' => $tag->id ]) }}" method="post">
    <div class="row justify-content-between">
        <div class="col-4">
            <input type="text" class="form-control" placeholder="输入分类名称" name="name"
                   value="{{ $tag->name or old('name') }}">
            @csrf
            {{ method_field('PUT') }}
        </div>
        <div class="col-4 position-relative">
            <button type="button" class="btn btn-primary d-inline mr-2 btn-outline-primary" data-toggle="modal" data-target="#exampleModalCenter">
                +
            </button>
            <div class="position-absolute" style="top:-10px;left: 70px;"><span class="iconfont f36" :class="selected" data-tag-icon="{{ $tag->icon }}"></span></div>
            <!-- Modal -->
            <div class="modal" id="exampleModalCenter" tabindex="-1"  role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">修改分类图标</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <ul class="mui-table-view mui-grid-view mui-grid-9" v-on:click="changeSelected">
                                <li v-for="icon in icons" class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3">
                                    <a>
                                                            <span class="iconfont f36" :class="icon"  :data-icon="icon">
                                                        </span></a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

            <select class="custom-select d-none" id="inputGroupSelect01" v-model="selected" name="icon">
                <option :value="icon" v-for="icon in icons"></option>
            </select>
        </div>
        <div class="col-4">
            <button type="submit" class="btn btn-primary">更新分类</button>
        </div>
    </div>
</form>