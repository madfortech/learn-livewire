<div>
    <a wire:click.prevent="create" href="#" class="btn btn-primary">Add new product</a>
    <table class="table mt-4">
        <thead>
        <tr>
            <th>Demo Product name</th>
            
        </tr>
        </thead>
        <tbody>
        @forelse ($demoProduct as $demoProducts)
            <tr>
                <td>{{ $demoProduct->demoProductname }}</td>
                
                <td>
                    <a wire:click.prevent="edit({{ $demoProduct->id }})"
                       href="#" class="btn btn-sm btn-primary">Edit</a>
                    <button wire:click.prevent="delete({{ $demoProduct->id }})"
                            onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"
                            class="btn btn-sm btn-danger">Delete</button>
                </td>
            </tr>
        
        @enforelse
        </tbody>
    </table>

     

     
</div>
