<template>
    <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
        <div class="w-25 bg-white row p-4">
            <div class="col-12 text-center p-2">
                <h3>Sign Up</h3>
            </div>
            <div class="col-12 p-2">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Email">
                </div>
            </div>
            <div class="col-12 p-2">
                <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your Password">
                </div>
            </div>
            <div class="col-12 p-2">
                <div class="form-group">
                    <label for="exampleInputPassword2">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirm your Password">
                </div>
            </div>
            <div class="col-12 flex flex-column justify-center p-2 text-center">
                <button type="submit" class="btn btn-secondary">Submit</button>
                <p class="mt-3">Already registered? <span><a href="/" style="text-decoration: underline">Sign In</a></span></p>
            </div>
        </div>
    </div>
</template>

<script>

</script>