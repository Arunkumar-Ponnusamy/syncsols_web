@include('admin.include.header')
        <div class="container" style="margin-top:150px;">
            <div class="row">
                <div class="col-sm-3"><h1>jQuery Dropify Plugin Demos</h1></div>
                <div class="col-sm-6">
                    <h2>Before</h2>
                    <label for="input-file-before">Basic HTML input file</label>
                    <input type="file" id="input-file-before" />
                    <hr class="big" />
                    <h2>After</h2>
                    <label for="input-file-now">Your so fresh input file — Default version</label>
                    <input type="file" id="input-file-now" class="dropify" data-default-file="" />
                    <br />
                    <label for="input-file-now-custom-1">You can add a default value</label>
                    <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="http://lorempixel.com/400/200" />
                    <br />
                    <label for="input-file-now-custom-2">You can set the height</label>
                    <input type="file" id="input-file-now-custom-2" class="dropify" data-height="500" />
                    <br />
                    <label for="input-file-now-custom-3">You can combine options</label>
                    <input type="file" id="input-file-now-custom-3" class="dropify" data-height="500" data-default-file="http://lorempixel.com/800/500" />
                    <br />
                    <label for="input-file-now-disabled-1">You can disabled the input</label>
                    <input type="file" id="input-file-now-disabled-1" class="dropify" disabled="disabled" />
                    <br />
                    <label for="input-file-now-disabled-2">Also with a default file</label>
                    <input type="file" id="input-file-now-disabled-2" class="dropify" disabled="disabled" data-default-file="http://lorempixel.com/400/200" />
                    <br />
                    <label for="input-file-max-fs">You can add a max file size</label>
                    <input type="file" id="input-file-max-fs" class="dropify" data-max-file-size="2M" />
                    <br />
                    <label for="input-file-disable-remove">You can disable remove button</label>
                    <input type="file" id="input-file-disable-remove" class="dropify" data-disable-remove="true" />
                    <br />
                    <label for="input-file-events">You can use events</label>
                    <input type="file" id="input-file-events" class="dropify-event" data-default-file="http://lorempixel.com/400/200" />
                    <br />
                </div>
            </div>
        </div>

@include('admin.include.footer')
