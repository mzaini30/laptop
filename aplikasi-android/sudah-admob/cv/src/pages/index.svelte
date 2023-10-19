<script>
  import { stringify } from "json-to-pretty-yaml";
  // import { stringify } from "yaml";
  import push_only from "push-only";

  let basic_information = {
    nama: "",
    posisi: "",
    email: "",
    nomor_hp: "",
    kota: "",
    linkedin: "",
    skills: "",
    professional_profile: "",
  };
  let languages = [
    {
      id: "acak",
      bahasa: "",
      level: "",
    },
  ];
  let experience = [
    {
      id: "acak",
      job_title: "",
      company_name: "",
      location: "",
      start_date: "",
      end_date: "",
      description: "",
      rincian_tugas: "",
    },
  ];
  let education = [
    {
      id: "acak",
      degree: "",
      university: "",
      year: "",
    },
  ];

  if (localStorage.basic_information) {
    basic_information = JSON.parse(localStorage.basic_information);
  }
  if (localStorage.languages) {
    languages = JSON.parse(localStorage.languages);
  }
  if (localStorage.experience) {
    experience = JSON.parse(localStorage.experience);
  }
  if (localStorage.education) {
    education = JSON.parse(localStorage.education);
  }

  $: localStorage.basic_information = JSON.stringify(basic_information);
  $: localStorage.languages = JSON.stringify(languages);
  $: localStorage.experience = JSON.stringify(experience);
  $: localStorage.education = JSON.stringify(education);

  async function publish() {
    let terkumpul = {
      layout: "simple",
      ...basic_information,
      skills: basic_information.skills.split(",").map((x) => x.trim()),
      education,
      languages,
      experience: experience.map((x) => {
        x.rincian_tugas = x.rincian_tugas.split(",").map((x) => x.trim());
        return x;
      }),
    };
    let jadi_yaml = `---
${stringify(terkumpul)}---`;

    let result = await push_only({
      token: "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",
      repo: "hafizquran/cv",
      filename: `${crypto.randomUUID()}.html`,
      content: `${btoa(jadi_yaml)}`,
    });
    location.href = `https://hafizquran.github.io/cv/${result}`;
  }

  function tambah_bahasa() {
    languages = [
      ...languages,
      { id: crypto.randomUUID(), bahasa: "", level: "" },
    ];
  }
  function tambah_experience() {
    experience = [
      ...experience,
      {
        id: crypto.randomUUID(),
        job_title: "",
        company_name: "",
        location: "",
        start_date: "",
        end_date: "",
        description: "",
        rincian_tugas: "",
      },
    ];
  }
  function tambah_education() {
    education = [
      ...education,
      {
        id: crypto.randomUUID(),
        degree: "",
        university: "",
        year: "",
      },
    ];
  }

  function hapus_bahasa(id) {
    languages = languages.filter((item) => item.id !== id);
  }
  function hapus_experience(id) {
    experience = experience.filter((item) => item.id !== id);
  }
  function hapus_education(id) {
    education = education.filter((item) => item.id !== id);
  }
</script>

<div class="p-3 grid grid-cols-1 gap-3">
  <details>
    <summary>Basic Information</summary>
    <div class="mt-3 grid grid-cols-1 gap-3">
      <div>
        <label for="">Name</label>
        <input
          type="text"
          bind:value={basic_information.nama}
          placeholder="John Dee"
        />
      </div>
      <div>
        <label for="">Position in Job</label>
        <input
          type="text"
          bind:value={basic_information.posisi}
          placeholder="Engineer"
        />
      </div>
      <div>
        <label for="">Professional Profile</label>
        <textarea
          rows="5"
          bind:value={basic_information.professional_profile}
          placeholder="Professional Profile"
        />
      </div>
      <div>
        <label for="">Email</label>
        <input
          type="text"
          bind:value={basic_information.email}
          placeholder="hi@email.me"
        />
      </div>
      <div>
        <label for="">Handphone Number</label>
        <input
          type="text"
          bind:value={basic_information.nomor_hp}
          placeholder="+1 234 5678 910"
        />
      </div>
      <div>
        <label for="">City</label>
        <input
          type="text"
          bind:value={basic_information.kota}
          placeholder="Neverland"
        />
      </div>
      <div>
        <label for="">Linkedin Username</label>
        <input
          type="text"
          bind:value={basic_information.linkedin}
          placeholder="lookme"
        />
      </div>
      <div>
        <label for="">Skills</label>
        <input
          type="text"
          bind:value={basic_information.skills}
          placeholder="Javascript, React, NodeJS"
        />
      </div>
    </div>
  </details>

  <details>
    <summary>Languages</summary>
    <div class="grid grid-cols-1 gap-5">
      {#each languages as x}
        <div class="mt-3 grid grid-cols-1 gap-3">
          <div>
            <label for="">Language</label>
            <input type="text" bind:value={x.bahasa} placeholder="English" />
          </div>
          <div>
            <label for="">Level</label>
            <input type="text" bind:value={x.level} placeholder="Native" />
          </div>
          <div class="flex flex-row-reverse">
            <button
              on:click={() => hapus_bahasa(x.id)}
              class="bg-red-500 p-2 px-3 rounded-lg text-white"
              >&times; Delete</button
            >
          </div>
        </div>
      {/each}
    </div>
    <button
      on:click={tambah_bahasa}
      class="p-2 px-3 border rounded-lg bg-green-500 text-white mt-3"
      >+ Add Language</button
    >
  </details>

  <details>
    <summary>Experience</summary>
    <div class="grid grid-cols-1 gap-5">
      {#each experience as x}
        <div class="mt-3 grid grid-cols-1 gap-3">
          <div>
            <label for="">Job Title</label>
            <input
              type="text"
              bind:value={x.job_title}
              placeholder="Engineer"
            />
          </div>
          <div>
            <label for="">Company Name</label>
            <input
              type="text"
              bind:value={x.company_name}
              placeholder="Google"
            />
          </div>
          <div>
            <label for="">Location</label>
            <input
              type="text"
              bind:value={x.location}
              placeholder="Neverland"
            />
          </div>
          <div>
            <label for="">Start Date</label>
            <input type="text" bind:value={x.start_date} placeholder="2020" />
          </div>
          <div>
            <label for="">End Date</label>
            <input type="text" bind:value={x.end_date} placeholder="Present" />
          </div>
          <div>
            <label for="">Description</label>
            <textarea
              rows="5"
              bind:value={x.description}
              placeholder="Description"
            />
          </div>
          <div>
            <label for="">Tasks</label>
            <textarea
              rows="5"
              bind:value={x.rincian_tugas}
              placeholder="task1, task2, task3"
            />
          </div>
          <div class="flex flex-row-reverse">
            <button
              on:click={() => hapus_experience(x.id)}
              class="bg-red-500 p-2 px-3 rounded-lg text-white"
              >&times; Delete</button
            >
          </div>
        </div>
      {/each}
    </div>
    <button
      on:click={tambah_experience}
      class="p-2 px-3 border rounded-lg bg-green-500 text-white mt-3"
      >+ Add Experience</button
    >
  </details>

  <details>
    <summary>Education</summary>
    <div class="grid grid-cols-1 gap-5">
      {#each education as x}
        <div class="mt-3 grid grid-cols-1 gap-3">
          <div>
            <label for="">Degree</label>
            <input type="text" bind:value={x.degree} placeholder="Ph.D" />
          </div>
          <div>
            <label for="">University</label>
            <input
              type="text"
              bind:value={x.university}
              placeholder="Harvard"
            />
          </div>
          <div>
            <label for="">Year</label>
            <input type="text" bind:value={x.year} placeholder="2015 - 2020" />
          </div>
          <div class="flex flex-row-reverse">
            <button
              on:click={() => hapus_education(x.id)}
              class="bg-red-500 p-2 px-3 rounded-lg text-white"
              >&times; Delete</button
            >
          </div>
        </div>
      {/each}
    </div>
    <button
      on:click={tambah_education}
      class="p-2 px-3 border rounded-lg bg-green-500 text-white mt-3"
      >+ Add Education</button
    >
  </details>

  <button
    on:click={publish}
    class="p-2 px-3 rounded-lg bg-green-500 text-white w-min">Publish</button
  >
</div>

<style>
  label {
    @apply block text-sm font-medium text-gray-700;
  }
  input,
  textarea {
    @apply block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent;
  }
  details {
    @apply border border-gray-200 rounded-lg p-4;
  }
  summary {
    @apply cursor-pointer select-none;
  }
</style>
