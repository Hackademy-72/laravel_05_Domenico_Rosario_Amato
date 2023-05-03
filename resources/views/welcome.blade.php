<x-layout header="HOMEPAGE">

    @if(session('articleCreated'))
        <div class="alert alert-success text-center">
            {{ session('articleCreated') }}
        </div>
    @endif


    @if(session('emailSent'))
        <div class="alert alert-success text-center">
            {{ session('emailSent') }}
        </div>
    @endif


    <div class="container-fluid my-5 vh-25">
        <div class="row">
            <div class="col-12 col-md-6">

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, enim. Doloribus illo dolores nisi quisquam ea voluptate quidem consequuntur libero, enim quia minima tenetur commodi temporibus quod, nesciunt, earum sed!</p>
            </div>

            <div class="col-12 col-md-6 text-danger text-end">

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, enim. Doloribus illo dolores nisi quisquam ea voluptate quidem consequuntur libero, enim quia minima tenetur commodi temporibus quod, nesciunt, earum sed!</p>
            </div>

        </div>
    </div>

</x-layout>