import { post } from "axios";
import { stringify } from "qs";
import { akun, sql } from "./api";
import { browser } from "$app/env";

export default async function () {
  if (browser) {
    let { data } = await post(
      sql,
      stringify({
        id: akun,
        kunci: "ambil",
        username: localStorage.usernameAsesmen,
        password: localStorage.passwordAsesmen,
      })
    );
    return data[0]; // nama, nip
  }
}
