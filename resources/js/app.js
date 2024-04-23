import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.getElementById('noteContent').contentEditable = true;
document.getElementById('noteContent').designMode = 'on';
function noteApp() {
    return {
        newNote: '',
        notes: [],
        addNote() {
            if (this.newNote.trim() === '') return;
            this.notes.push({ id: Date.now(), title: 'Note ' + (this.notes.length + 1), content: this.newNote });
            this.newNote = '';
        },
        formatText(command) {
            document.execCommand(command, false, '');
        }
    }
}
