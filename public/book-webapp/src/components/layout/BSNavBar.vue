<template>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <router-link class="navbar-brand" to="/">Home</router-link>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <router-link class="nav-link" to="/mylist">My List</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/community">Community</router-link>
            </li>
          </ul>
            <div class="me-2">
              <select v-model="$i18n.locale" @change="onChange($i18n.locale)" class="form-select">
                  <option v-for="locale in $i18n.availableLocales" :value="locale">{{locale}}</option>
              </select>
            </div>
          <form class="d-flex" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-light" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </header>
</template>

<script>
import {RouterLink} from 'vue-router'

function onChange(locale){
    localStorage.setItem('locale',locale);
}

export default{
  components: {
    RouterLink
  }
}
</script>