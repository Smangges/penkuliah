<template>
  <app-dashboard>
    <app-entry-filter v-on:edit="addTab"></app-entry-filter>
    <app-entry-editor :users="tabs"></app-entry-editor>
  </app-dashboard>
</template>

<script>
  export default {
    data() {
      // dummy data
      // todo
      return {
        tabs: [
          { name: 'Rafifa', student: { id: 12345, name: 'Rafifa Luthfarida', generation: 2016 }},
          { name: 'Iqbal' },
          { name: 'Aditia' },
          { name: 'Safnah' }
        ]
      }
    },

    methods: {
      addTab(data) {
        // example behavior
        // todo
        this.tabs.push({
          name: data.name,
          student: data
        });
      }
    }
  }
</script>
