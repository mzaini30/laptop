<script>
  import Login from "login-zen";
</script>

<Login platform="Mail Merge"></Login>

<svelte:head>
  <title>Mail Merge</title>
</svelte:head>

<div class="grid gap-5 p-5 grid-cols-2">
  <div>
    <label class="form-control">
      <div class="label">
        <span class="label-text">Template</span>
      </div>
      <textarea
        class="textarea textarea-bordered h-[calc(100vh-150px)]"
        placeholder="Name: {'{{'} name {'}}'}
Email: {'{{'} email {'}}'}"
      ></textarea>
    </label>
    <button class="btn btn-secondary mt-5" onclick="my_modal_2.showModal()"
      >Generate</button
    >
  </div>
  <label class="form-control">
    <div class="label">
      <span class="label-text">Data from Excel</span>
    </div>
    <textarea
      class="textarea textarea-bordered h-[calc(100vh-150px)]"
      placeholder="Name  Email
Zen  cat@gmail.com
Ronald  excalibur@gmail.com"
    ></textarea>
  </label>
</div>

<dialog id="my_modal_2" class="modal">
  <div class="modal-box">
    <label class="form-control">
      <div class="label">
        <span class="label-text">Result</span>
      </div>
      <textarea readonly class="textarea textarea-bordered h-[450px]"
      ></textarea>
    </label>
  </div>
  <form method="dialog" class="modal-backdrop">
    <button>close</button>
  </form>
</dialog>
