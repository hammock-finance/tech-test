<div>

    <div class="row my-2">

        <h1>EPC Lookup</h1>

    </div>

    <div class="row my-2">

        <div class="card m-auto">
            <div class="card-header">
                Type a post code in the box below to saarch for any epc's in that postcode
            </div>
            <div class="card-body">
                <div>
                    <div class="input-group input-group-sm mb-3 mb-lg-0 border">
                        <label>Post Code</label>
                        <input type="text" class="form-control border-0" wire:model.lazy="postcode"
                               placeholder="Postcode" aria-label="Postcode" aria-describedby="PostcodeAddon">
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach($results as $result)
        <div class="row my-2">
            <div class="col-12 card card-hammock mb-3">
                <div class="card-body">
                    <div class="label font-weight-bold">Fact Card</div>
                    <table class="table table-bordered">
                        <tbody>

                        @foreach($result as $resultOfResult => $key)
                            <tr>
                                <td scope="row">{{ $resultOfResult }}</td>
                                <td>{{  $key  }}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    @endforeach

</div>
