<template>
  <default-field :field="field" :errors="errors">
    <template slot="field">
      <vue-json-editor
        :class="'flex-1 overflow-y-hidden'"
        v-model="value"
        :show-btns="false"
        :mode="field.mode"
        :expandedOnStart="field.expandedOnStart"
      ></vue-json-editor>
      <p v-if="hasError" class="my-2 text-danger">{{ firstError }}</p>
    </template>
  </default-field>
</template>
<script>
import { FormField, HandlesValidationErrors } from "laravel-nova";
import vueJsonEditor from "vue-json-editor";

export default {
  mixins: [FormField, HandlesValidationErrors],

  props: ["resourceName", "resourceId", "field"],
  data() {
    return {
      defaultJson: {
        voice_config: {
          ar: {
            audioConfig: {
              audioEncoding: "",
              pitch: "",
              speakingRate: "",
            },
            voice: {
              languageCode: "",
              name: "",
              ssmlGender: "",
            },
          },
          en: {
            audioConfig: {
              audioEncoding: "",
              pitch: "",
              speakingRate: "",
            },
            voice: {
              languageCode: "",
              name: "",
              ssmlGender: "",
            },
          },
        },
      },
    };
  },
  components: {
    vueJsonEditor,
  },
  methods: {
    /*
     * Set the initial, internal value for the field.
     */
    setInitialValue() {
      this.value = this.field.value || this.field.defaultJson;
    },

    /**
     * Fill the given FormData object with the field's internal value.
     */
    fill(formData) {
      formData.append(
        this.field.attribute,
        JSON.stringify(this.value) || JSON.stringify(this.field.defaultJson)
      );
    },
  },
};
</script>

<style src="../../css/custom.css"></style>
