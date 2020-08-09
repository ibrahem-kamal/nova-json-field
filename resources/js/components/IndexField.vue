<template>
  <div>
    <el-button type="primary" @click="dialogVisible = true" round>{{__('View Json')}}</el-button>
    <el-dialog title="Json Viewer" :visible.sync="dialogVisible" width="70%">
      <vue-json-editor
        v-model="field.value"
        :show-btns="false"
        :mode="field.mode"
        :expandedOnStart="field.expandedOnStart"
      ></vue-json-editor>
      <span slot="footer" class="dialog-footer">
        <el-button @click="dialogVisible = false">Close</el-button>
      </span>
    </el-dialog>
  </div>
</template>

<script>
import vueJsonEditor from "vue-json-editor";
export default {
  props: ["resourceName", "field"],
  data() {
    return {
      dialogVisible: false,
    };
  },
  components: {
    vueJsonEditor,
  },
};
</script>
<style src="../../css/custom.css"></style>;
