import React from "react";
import { FaUser, FaUsers } from "react-icons/fa";

export default function Sidebar() {
  return (
    <div className="order-1 flex flex-1 shrink-0 flex-col sm:order-2 sm:w-[320x] sm:flex-initial sm:border-l sm:border-secondary lg:w-[360px]">
      <div className="flex justify-between items-center px-2 pt-2 pb-0">
        <h3 className="text-2xl font-semibold">Chats</h3>
        <button className="flex h-6 w-6 items-center justify-center rounded-full bg-primary text-white">
          <FaUsers />
        </button>
      </div>
    </div>
  );
}
