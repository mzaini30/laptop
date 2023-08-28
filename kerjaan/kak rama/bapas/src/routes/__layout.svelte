<script>
  import "sweetalert2/dist/sweetalert2.min.css";
  import "virtual:windi.css";
</script>

<slot />

<style>
  :global(body) {
    @apply bg-gray-200;
  }
  @media print {
    :global(body) {
      @apply bg-white;
    }
  }
  :global(table) {
    @apply bg-white;
  }
</style>
