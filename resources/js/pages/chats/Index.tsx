import AppLayout from "@/layouts/AppLayout";
import SidebarMini from "@/layouts/partials/SidebarMini";
import Sidebar from "@/components/chats/Sidebar";
import ContentEmpty from "@/components/chats/ContentEmpty";
import { ModalProvider } from "@/contexts/modal-context";

export default function Chats() {
  return (
    <AppLayout title="Chats">
      <ModalProvider>
        <SidebarMini />
        <Sidebar />
        <ContentEmpty />
      </ModalProvider>
    </AppLayout>
  );
}
