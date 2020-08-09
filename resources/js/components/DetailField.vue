<template>
  <vue-json-editor
    v-model="field.value"
    :show-btns="false"
    :mode="field.mode"
    :expandedOnStart="true"
  ></vue-json-editor>
</template>

<script>
import vueJsonEditor from "vue-json-editor";

export default {
  props: ["resource", "resourceName", "resourceId", "field"],
  components: {
    vueJsonEditor,
  },
};
</script>
<style src="../../css/custom.css"></style>

