@extends('master')
@section('content')
<div
  class="custom-login mx-auto col-10 col-md-8 col-lg-6 block max-w-sm rounded-lg bg-white p-6 shadow-lg dark:bg-neutral-700 ">
  <form action="login" method="POST">
    <div class="relative mb-12" data-te-input-wrapper-init>
      @csrf
      <input
        type="email"
        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
        id="exampleInputEmail1"
        name="email"
        aria-describedby="emailHelp"
        placeholder="Enter email" />
      <label
        for="exampleInputEmail1"
        class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200"
        >Email address</label
      >
    </div>
    <div class="relative mb-8" data-te-input-wrapper-init>
      <input
        type="password"
        name="password"
        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
        id="exampleInputPassword1"
        placeholder="Password" />
      <label
        for="exampleInputPassword1"
        class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200"
        >Password</label
      >
    </div>
    <button
      type="submit"
      class="rounded bg-primary px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-primary-700 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg"
      data-te-ripple-init
      data-te-ripple-color="light">
      Login
    </button>
  </form>
</div>
@endsection

    <!-- Login Page 
    <button class="btn btn-primary">Click On Me</button> -->

<!-- <div class="container">
    <div class="row">
      <div class="mx-auto col-10 col-md-8 col-lg-6">
         <form>
         <div class="form-group">
         <label for="exampleInputEmail1"><b>Email address</b></label>
         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
         <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
         </div>
         <div class="form-group">
         <label for="exampleInputPassword1"><b>Password</b></label>
         <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
         </div>
         <div class="form-group form-check">
         <input type="checkbox" class="form-check-input" id="exampleCheck1">
         <label class="form-check-label" for="exampleCheck1"><b>Check me out</b></label>
         </div>
         <button type="submit" class="btn btn-primary">Submit</button>
         </form>  
      </div>
    </div>
 </div> -->