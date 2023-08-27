<script>
  import { goto } from "$app/navigation";
  import { browser } from "$app/env";
  import { page } from "$app/stores";
  import { sql, akun } from "$lib/api";
  import { username, role, email } from "$lib/store";
  import axios from "axios";
  import qs from "qs";

  let tampil = false;

  async function cekDulu() {
    if (browser) {
      if (!(localStorage.usernameAsesmen && localStorage.passwordAsesmen)) {
        goto("/login");
      } else {
        const cek = await axios.post(
          sql,
          qs.stringify({
            id: akun,
            kunci: "cek-password",
            username: localStorage.usernameAsesmen,
            password: localStorage.passwordAsesmen,
          })
        );
        if (cek.data[0].banyak < 1) {
          goto("/login");
        } else {
          const ambil = await axios.post(
            sql,
            qs.stringify({
              id: akun,
              kunci: "ambil",
              username: localStorage.usernameAsesmen,
              password: localStorage.passwordAsesmen,
            })
          );
          $username = ambil.data[0].nip;
          $role = ambil.data[0].role;
          $email = ambil.data[0].email;
          tampil = true;
        }
      }
    }
  }
  cekDulu();

  async function keluar() {
    if (browser) {
      localStorage.removeItem("usernameAsesmen");
      localStorage.removeItem("passwordAsesmen");
      goto("/login");
    }
  }
</script>

{#if tampil}
  <div class="grid grid-cols-12 <md:grid-cols-1">
    <div class="col-span-2 bg-yellow-200 nggak-diprint <md:col-span-1">
      <div class="sticky top-0">
        <a
          href="/user"
          class:active={$page.path == "/user"}
          sveltekit:prefetch
          class="text-uppercase block text-center bg-white text-yellow-800 text-3xl p-3"
          >Aplikasi "SAKU-PK"</a
        >

        {#if $role == "superuser"}
          <a
            href="/user/atur-akun"
            class:active={$page.path == "/user/atur-akun"}
            sveltekit:prefetch
            class="link hover:bg-yellow-400 p-3 block">Atur Akun</a
          >
        {/if}

        <a
          href="/user/informed-consent"
          class:active={$page.path == "/user/informed-consent" ||
            $page.path.includes("/user/informed-consent/")}
          sveltekit:prefetch
          class="link hover:bg-yellow-400 p-3 block"
          >Lembar Persetujuan <em>(Informed Consent)</em></a
        >
        <a
          href="/user/kriminogenik"
          class:active={$page.path == "/user/kriminogenik" ||
            $page.path.includes("/user/kriminogenik/")}
          sveltekit:prefetch
          class="link hover:bg-yellow-400 p-3 block"
          >Instrumen Asesmen Risiko Residivisme Indonesia dan Asesmen Kebutuhan
          Kriminogenik Dewasa</a
        >
        <a
          href="/user/kriminogenik-anak"
          class:active={$page.path == "/user/kriminogenik-anak" ||
            $page.path.includes("/user/kriminogenik-anak/")}
          sveltekit:prefetch
          class="link hover:bg-yellow-400 p-3 block"
          >Instrumen Penilaian Risiko dan Faktor Kriminogenik Anak</a
        >
        <a
          href="/user/penempatan-narapidana"
          class:active={$page.path == "/user/penempatan-narapidana" ||
            $page.path.includes("/user/penempatan-narapidana/")}
          sveltekit:prefetch
          class="link hover:bg-yellow-400 p-3 block"
          >Instrumen Screening Penempatan Narapidana</a
        >
        <a
          href="/"
          class="link hover:bg-yellow-400 p-3 block"
          on:click|preventDefault={keluar}>Keluar</a
        >
      </div>
    </div>

    <div class="p-3 col-span-10 isi <md:col-span-1">
      <slot />
    </div>
  </div>
{/if}

<style>
  @media print {
    .nggak-diprint {
      display: none;
    }
    .isi {
      grid-column: span 12 / span 12;
    }
  }

  .active {
    @apply bg-yellow-400;
  }
</style>
