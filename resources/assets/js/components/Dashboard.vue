<template>
  <div class="dashboard-wrapper">
    <div class="dashboard-side-logo"></div>
    <el-menu class="dashboard-side-wrapper">
      <el-submenu index="1" v-if="uid">
        <template slot="title"><i class="el-icon-menu"></i>{{ name }}</template>
        <el-menu-item index="1-1" v-on:click="to('/user/'+uid)">My Profile</el-menu-item>
        <el-menu-item index="1-2">Settings</el-menu-item>
        <el-menu-item index="1-3" v-on:click="to('/logout')">Logout</el-menu-item>
      </el-submenu>
      <el-menu-item v-else index="1" v-on:click="to('/login')"><i class="el-icon-menu"></i>Login</el-menu-item>
      <el-menu-item index="2" v-on:click="to('/data-entry')"><i class="el-icon-document"></i>Data Entry</el-menu-item>
      <el-menu-item index="3" v-on:click="to('/explorer')"><i class="el-icon-search"></i>Explorer</el-menu-item>
      <el-menu-item index="4" v-on:click="to('/analytics')"><i class="el-icon-d-arrow-right"></i>Analytics</el-menu-item>
      <el-menu-item index="4" v-on:click="to('/analytics')"><i class="el-icon-setting"></i>Utility Tools</el-menu-item>
      <el-menu-item index="5" v-on:click="to('/help-desk')"><i class="el-icon-information"></i>Help Desk</el-menu-item>
    </el-menu>
    <div class="dashboard-content-wrapper">
      <slot></slot>
    </div>
  </div>
</template>

<style>
  .dashboard-wrapper {
    min-width: 1024px;
    position: static;
  }
  .dashboard-side-logo {
    z-index: 11;
    width: 180px;
    border-right: 1px solid #777;
    height: 180px;
    position: fixed;
    top: 0px;
    left: 0px;
    background: #777;
  }
  .dashboard-side-wrapper {
    z-index: 10;
    position: fixed;
    top: 180px;
    bottom: 0px;
    left: 0px;
    width: 180px;
    overflow-y: auto;
    border-right: 1px solid #ddd;
    border-radius: 0px;
  }
  .dashboard-content-wrapper {
    margin: 0px;
    padding-left: 180px;
  }
</style>

<script>
  export default {
    props: ['uid', 'name'],

    methods: {
      to(route) {
        window.open(route, '_self');
      }
    }
  }
</script>
