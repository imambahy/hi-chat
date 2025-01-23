import clsx from "clsx";
import React from "react";

type formAlertProps = {
  message: string;
  // classname ?: berarti boleh nullable
  className?: string;
};

export default function FormAlert({ message, className }: formAlertProps) {
  return (
    <div
      className={clsx(
        "rounded-lg bg-success/25 px-4 py-3 font-medium text-success-dark dark:bg-success/10",
        className,
      )}
    >
      {message}
    </div>
  );
}
