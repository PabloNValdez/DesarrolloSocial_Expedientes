<template>
    <form @submit.prevent="cargaExtracto()" >
        <v-card color="#FACD89">
            <div class="pt-8 px-8">
                <v-row class="tex" justify="start">
                    <v-col cols="12" sm="12" lg="7" class="px-5">
                        <div class="d-flex column d-flex-sm row">
                            <p class="pt-5 pr-3">E/REND.CTAS.ACORDADA N° 32/2001. MES:</p>
                            <v-text-field
                                :disabled="!isEditing"
                                color="amber accent-4"
                                v-model="input1"
                            ></v-text-field>
                        </div>
                    </v-col>

                    <v-col cols="12" sm="12" lg="5" class="px-5">
                        <div class="d-flex column d-flex-sm row">
                            <p class="pt-5 pr-3">AÑO:</p>
                            <v-text-field
                                :disabled="!isEditing"
                                color="amber accent-4"
                                v-model="input2"
                            ></v-text-field>
                        </div>
                    </v-col>

                    <v-col cols="12" sm="12" lg="6" class="px-5">
                        <div class="d-flex column d-flex-sm row">
                            <p class="pt-5 pr-3">IMPORTE: $</p>
                            <v-text-field
                                :disabled="!isEditing"
                                color="amber accent-4"
                                v-model="input3"
                            ></v-text-field>
                        </div>
                    </v-col>
                </v-row>
                    
                <v-row class="tex" justify="start">
                    <v-col cols="12" sm="12" lg="6" class="px-5">
                        <div class="d-flex column d-flex-sm row">
                            <p class="pt-5">INICIADOR: {{ iniciador.nombre }}</p>
                        </div>
                    </v-col>

                    <v-col cols="12" sm="12" lg="6">
                        <div class="d-flex justify-end">
                            <p class="pt-5">ACORDADA 32/01 ESPONTÁNEA</p>
                        </div>
                    </v-col>
                </v-row>
            </div>
            <v-divider/>
            <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn
                    color="rgb(255, 255, 255, 0.2)"
                    @click="isEditing = !isEditing"
                    :disabled="isEditing"
                    class="my-3 mr-4"
                >
                    <v-icon class="pr-2"> mdi-pencil </v-icon>
                    Editar
                </v-btn>
                <v-btn
                    :disabled="!isEditing"
                    color="rgb(255, 255, 255, 0.2)"
                    @click="cargaExtracto()"
                    type="submit"
                    elevation="3"
                    class="my-3 mr-4"
                >
                    <v-icon class="pr-2"> mdi-check-bold </v-icon>
                    Cargar extracto
                </v-btn>
            </v-card-actions>
            <v-snackbar
                v-model="hasSaved"
                :timeout="2000"
                absolute
                left
                color="#FACD89"
                class="ml-4 mb-2"
            >
                El extracto se ha guardado
            </v-snackbar>
        </v-card>
    </form>
</template>

<script>

import {mapActions} from "vuex";

export default {
    name: 'Acordada32-01Espontanea',

  props: {
    iniciador: {
      value: "No ha seleccionado ningun Iniciador",
      type: Object
    },

    motivo: {
      value: "No ha seleccionado aún",
      type: Object
    }
  },

    data () {
      return {
        hasSaved: false,
        isEditing: true,
        input1: '',
        input2: '',
        input3: '',
        nombreIniciador: '',
      }
    },

  methods: {
    cargaExtracto() {
      this.isEditing = !this.isEditing
      this.hasSaved = true
      const extracto = "E/REND.CTAS.ACORDADA N° 32/2001. MES: " + this.input1 + ". AÑO " + this.input2 +  ". IMPORTE: $" + this. input3 + ". ACORDADA 32/01 ESPONTÁNEA" + ". INICIADOR: " + this.iniciador.nombre
      this.extracto(extracto)
    },

    ...mapActions([
      'extracto',
    ]),
  },

}
</script>

<style>
.tex{
  font-family: Montserrat-Regular;
  font-size: 18px;
}
</style>